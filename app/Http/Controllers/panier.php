<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produits;

use Cart;

use Illuminate\Support\Facades\Session;

class panier extends Controller
{


//Stocker les produits dans le panier
    public function store($id)
     {
       
        
        $quantite = 1;

      
$cartContent = Cart::content();
$cartCount = count($cartContent);
        
      
         
        $produit = Produits::with('images')->where('id',  $id )->first();
        $qte =  $produit->quantite;

      
        if ($produit)
        if( ($qte < $quantite)  || ( $quantite > $qte )) {
            return redirect()->back()->with('cartCount', $cartCount)->with('error', 'Ce produit est en rupture de stock, essayer de dimunier la quantité svp...');
           
        } 
        else {
          
            $imageFilename = $produit->images->isNotEmpty() ? $produit->images->first()->filename : 'default.jpg';


           
 // Ajout du produit au panier
 Cart::add([
    'id' => $id,
    'name' => $produit->nom,
    'qty' => $quantite,
    'price' => $produit->prix,

    'options' => ['img' =>$imageFilename] 
   
])->associate(Produits::class);


}


  return redirect()->back()->with('success', 'L\'article a bien été ajouté au panier')->with('cartCount', $cartCount);
    }
 
    
    

    //vider les produits dans le panier
    public function videpanier(Request $request){

     Cart::destroy();
        return redirect()->back()->with('success', 'Votre panier est vide dès à présent');
    }
    

    public function voirpanier(){

      Cart::content();

        return view('pages.shopping-cart');
    }

    public function modifier_qte(Request $request)
    {
        $id_produit_en_panier = $request->input('id_duproduit');
        $newquantity = $request->input('qte');
        $id_en_base_de_donnees = $request->input('id_produit_en_base_de_donnee');
    
     
        $produit = Produits::find($id_en_base_de_donnees);
        
  
        if (!$produit) {
            return redirect('/Mon_panier')->with('error', 'Produit non trouvé.');
        }
    
    
        $produit_qte = $produit->quantite;
    
     
        if ($newquantity > $produit_qte) {
            return redirect('/Mon_panier')->with('error', 'Ce produit est en rupture de stock, essayez de diminuer la quantité svp...');
        } else {
      
            Cart::update($id_produit_en_panier, $newquantity);
    
            return redirect('/Mon_panier')->with('success', 'Quantité mise à jour avec succès.');
        }
    }
    
    

    
     public function suppproduit (request $request){
        $id=$request->input('id_duproduit');
        cart::remove($id);

        // if (empty($id)) {
        //     return view('detailpanier')->with('message', 'Ce produit a déjà été supprimé');
        // }

        return redirect()->back();
     }

 


}

  

