<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Stripe\PaymentIntent;
use Stripe\Stripe;
use Cart;
use illuminate\Support\Arr;
use App\Models\Produits;
use App\Models\Commandes;
use App\Models\Produits_commandes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Commande extends Controller
{
       //Passer commander
       public function commande() {
        $montant_total = cart::subtotal();
        return view('pages.adresse', compact('montant_total'));
     }

    


     public function valider_commande(Request $request)
     {
         $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
     
         // Validation des données
         $validated = $request->validate([
             'adresse' => 'required|string|max:255',
         ]);
     
         // Recalcul du total du panier depuis les produits
         $subtotal = 0;
         foreach (Cart::content() as $item) {
             $product = Produits::findOrFail($item->id); // Assurez-vous que le produit existe
             $subtotal += $product->prix * $item->qty;
         }
     
         $amount = round($subtotal * 100); // Convertir en centimes
     
         $maxAmount = 99999999; // Limite maximale (99,999.99 EUR)
         if ($amount > $maxAmount) {
             return redirect()->route('voir_panier')->withErrors(['error' => 'Le montant de votre commande dépasse la limite autorisée.']);
         }
     
         // Générer un slug unique pour la commande (temporaire)
         $slug = (string) Str::uuid();
     
         try {
             // Créer un PaymentIntent avec Stripe
             $payment = $stripe->paymentIntents->create([
                 'amount' => $amount,
                 'currency' => 'eur',
                 'metadata' => [
                     'commande_slug' => $slug,
                     'user_id' => Auth::id(),
                 ],
             ]);
     
             // Stocker l'adresse temporairement dans la session
             $request->session()->put('adresse_livraison', $validated['adresse']);
             $request->session()->put('commande_slug', $slug);
     
             // Renvoyer le client_secret pour le frontend Stripe
             return view('stripe_paiement', ['clientSecret' => $payment->client_secret]);
     
         } catch (\Stripe\Exception\ApiErrorException $e) {
           
             return redirect()->route('voir_panier')->withErrors(['errors' => 'Erreur de paiement Stripe.']);
         }
     }
     
     
 


     public function stockercommande(Request $request)
     {
         // Récupérer les paramètres de paiement
         $paymentIntentId = $request->input('payment_intent');
         $paymentSuccess = $request->input('payment_success');
     
         if ($paymentSuccess !== 'true' || !$paymentIntentId) {
             return redirect()->route('voir_panier')->withErrors(['error' => 'Erreur de paiement.']);
         }
     
         try {
             $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
             $paymentIntent = $stripe->paymentIntents->retrieve($paymentIntentId);
     
             if ($paymentIntent->status !== 'succeeded') {
                 return redirect()->route('voir_panier')->withErrors(['error' => 'Paiement non validé.']);
             }
     
             // Vérifier si une commande existe déjà pour ce PaymentIntent
             if (Commandes::where('transactionId', $paymentIntentId)->exists()) {
                 return redirect()->route('voir_panier')->withErrors(['error' => 'Commande déjà traitée.']);
             }
     
             $adresseLivraison = $request->session()->get('adresse_livraison');
             $slug = $request->session()->get('commande_slug');
     
             if (!$adresseLivraison || !$slug) {
                 return redirect()->route('voir_panier')->withErrors(['error' => 'Données manquantes.']);
             }
     
             // Créer la commande
             $commande = Commandes::create([
                 'transactionId' => $paymentIntentId,
                 'Acheteur_nom' => Auth::user()->name,
                 'Acheteur_email' => Auth::user()->email,
                 'Acheteur_numero' => Auth::user()->numero,
                 'Acheteur_adresse' => $adresseLivraison,
                 'Montant' => $paymentIntent->amount / 100, // Convertir en euros
                 'statut' => false,
                 'slug' => $slug,

             ]);
     
             // Ajouter les produits à la commande et réduire le stock
             DB::transaction(function () use ($commande) {
                 foreach (Cart::content() as $item) {
                     $product = Produits::findOrFail($item->id);
     
                     // Vérifier le stock
                     if ($product->quantite < $item->qty) {
                         throw new \Exception("Stock insuffisant pour le produit : {$product->nom}");
                     }
     
                     // Ajouter à la commande
                     Produits_commandes::create([
                         'commande_id' => $commande->id,
                         'acheteur_id' => Auth::id(),
                         'produit_id' => $product->id,
                         'vendeur_id' => $product->idUser,
                         'produit_image' => $item->options['img'],
                         'prix' => $item->price,
                         'quantite' => $item->qty,
                         'statut' => false,
                     ]);
     
                     // Réduire le stock
                     $product->quantite -= $item->qty;
                     $product->save();
                 }
             });
     
             // Nettoyer le panier et la session
             Cart::destroy();
             $request->session()->forget(['adresse_livraison', 'commande_slug']);

             //             Mail::send([], [], function ($message) use ($request) {
        //     $message->from('test@gmail.com')
        //         ->to(Auth::user()->email) 
        //         ->subject('ACHAT SUR  GADGET HAVEN')
        //         ->html('Votre commande a bien été recu et  n\'hesitez pas à nous contacter pour n\'importe laquelle de vos  préoccupations. Merci de nous choisir ✌️'); 
        // });

        

//                    Mail::send([], [], function ($message) use ($request, $subtotal) {
//     $message->from('test@gmail.com')
//     ->to('admin@gmail.com') 
//     ->subject('ACHAT SUR GADGET HAVEN')
//     ->html("Vous avez reçu une nouvelle commande d'une valeur de " . number_format($subtotal, 2, ',', ' ') . " €."); 
// });

     
             return redirect()->route('voir_panier')->with('success', 'Paiement et commande validés avec succès.');
     
         } catch (\Exception $e) {
           
             return redirect()->route('voir_panier')->withErrors(['error' => 'Erreur : ' . $e->getMessage()]);
         }
     }
     

     
      //Mise à jour du statut d'une commande 
      public function updateStatutcommande($id){
     
     
        $produits = commandes::findOrFail($id);

       
        $produits->update(['statut' => 1]);

       
        return redirect()->back()->with('success','Commande traité');
    }

    public function nontraiter($id){
     
      
        $produits = commandes::findOrFail($id);

       
        $produits->update(['statut' => 0]);

       
        return redirect()->back()->with('success','Commande non traité');
    }
     





 //Liste de toutes les commandes 
 public function listescommades() {

        
    $commandes = Commandes::orderBy('id', 'desc')->paginate(10);
   

return view('dashboard.allcommande', compact('commandes'));

}


//affichage des details de chaque commande pour l'admin
public function showCommandeDetails($id)
{
$user = Auth::user();
if ($user->is_admin == 0 ) {
    return redirect('/');
        }
// Récupération les détails de la commande depuis la table produits_commandes
$produitsCommandes = Produits_Commandes::where('commande_id', $id)
                                      ->with('produit', 'vendeur') 
                                      ->get();

// Groupage des produits par vendeur
$produitsParVendeur = $produitsCommandes->groupBy('vendeur_id');

return view('Dashboard.commande-details', compact('produitsParVendeur','id'));
}



//lISTE DES COMMANDES NON TRAITES
public function commandesnontraite(){


            $commandesnontraites = Commandes::orderBy('id', 'desc')->where('statut', 0)->paginate(10)
            ;

return view('dashboard.commande-non-traite', compact('commandesnontraites'));

}

//lISTE DES COMMANDES  TRAITES
public function commandestraite(){


            $commandestraites =  Commandes::orderBy('id', 'desc')->where('statut', 1)->paginate(10)
          ;

return view('dashboard.commande-traite', compact('commandestraites'));

}


//Affichage des commandes du client pour le clent
public function commandesclients(){

$acheteur_id = Auth::user()->id;

$ses_commandes = Produits_Commandes::where('acheteur_id', $acheteur_id) 
    ->join('commandes', 'produits_commandes.commande_id', '=', 'commandes.id')
    ->where('produits_commandes.vendeur_id', $acheteur_id)

    ->select(
        'produits_commandes.commande_id',
        'commandes.Montant',
        'commandes.slug',
        'commandes.Acheteur_adresse',
        'commandes.statut',
        'commandes.created_at'
    )
    ->groupBy('produits_commandes.commande_id',   'commandes.slug', 'commandes.Acheteur_adresse', 'commandes.Montant', 'commandes.statut', 'commandes.created_at')
    ->orderBy('commande_id', 'desc')
    ->paginate(20);
return view('pages.mescommandes', compact('ses_commandes'));
}



//Détails commande pour acheteur
public function showCommandeDetailsforacheteur($slug)
{



$acheteur_id = Auth::user()->id;

$commande_slug = Commandes::where('slug', $slug)->first();
    
// Si la catégorie n'existe pas, retourner une erreur 404
if (!$commande_slug) {
    abort(404, 'Categorie non trouvée');
}

// Vérification que l'utilisateur connecté est bien l'acheteur de la commande
$produitsCommandes = Produits_Commandes::where('commande_id', $commande_slug->id)
->where('acheteur_id', $acheteur_id)
->with('produit', 'vendeur') 
->get();


if ($produitsCommandes->isEmpty()) {
return redirect('/');
}



$produitsCommandes = Produits_Commandes::where('commande_id',$commande_slug->id)
                                      ->with('produit', 'vendeur') 
                                      ->get();


$produitsParVendeur = $produitsCommandes->groupBy('vendeur_id');

return view('dashboard.admin.commande-details', compact('produitsParVendeur'));
}
     

 //suppresion d'une commande par l'admnistrateur
 public function destroy(Commandes  $commande)
 {


     $commande->delete();

     return redirect()->back()->with('success', 'Commande supprimée');
 
 }
}