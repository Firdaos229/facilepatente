<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\acceuils;
use App\Models\achats;
use App\Models\Commandes;
use App\Models\Diplomes;
use App\Models\Footers;
use App\Models\Metiers_emploi;
use App\Models\Metiers_job;
use App\Models\Pays;
use App\Models\User;
use App\Models\Villes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

     // Affiche la page d'information "À propos"
 
 
     // Affiche le formulaire pour créer ou modifier l'entrée "À propos"
     public function createOrEditAbout()
     {
         $about = About::first();  // Vérifie s'il existe déjà une entrée
         return view('dashboard.apropos.create', compact('about'));
     }
 
     // Enregistre ou met à jour l'entrée "À propos"
public function storeOrUpdateAbout(Request $request)
{
    $request->validate([
        'A_propos' => 'required',
        'image' => 'nullable', // Validation de l'image
    ]);

    // Recherche du premier enregistrement ou création d'un nouveau
    $about = About::first();  // Récupère le premier enregistrement

    // Traitement du téléchargement de l'image
    $uploadedImage = null;
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time() . '_' . uniqid() . '.' . $ext;
        $file->move(public_path('storage/abouts'), $filename); // Déplacement du fichier
        $uploadedImage = $filename; // Nom du fichier
    }

    if ($about) {
        // Mise à jour de l'entrée existante
        $about->update([
            'A_propos' => $request->input('A_propos'),
            'image' => $uploadedImage ?? $about->image, // Conserve l'ancienne image si aucune nouvelle n'est fournie
        ]);
    } else {
        // Création d'une nouvelle entrée si elle n'existe pas
        About::create([
            'A_propos' => $request->input('A_propos'),
            'image' => $uploadedImage,
        ]);
    }

    return redirect()->route('admin.about.create')->with('success', 'Informations "À propos" mises à jour avec succès!');
}



     public function indexFooter()
{
    $footer = Footers::first(); // Récupère la première et seule entrée.
    return view('dashboard.footer.index', compact('footer'));
}

public function createFooter(Request $request)
{
    if ($request->isMethod('post')) {
        // Validation des données
        $validatedData = $request->validate([
            'description' => 'nullable',
            'Conditions_generale' => 'nullable',
            'politique_de_confidentialite' => 'nullable',
            'email' => 'nullable|email',
            'phone' => 'nullable',
        ]);

        $footer = Footers::first();

        if($footer){
           $footer->update(

                $validatedData
            );
    
        }else {
            // Création d'une nouvelle entrée si elle n'existe pas
            Footers::create(
                $validatedData
            );
        }

        // Utilisation de updateOrCreate pour gérer l'unique enregistrement
      
        return redirect()->route('admin.footer.index')->with('success', 'Les informations du footer ont été mises à jour avec succès.');
    }

    // Récupérer les données existantes pour pré-remplir le formulaire
    $footer = Footers::first();

    return view('dashboard.footer.create', compact('footer'));
}





    public function all(){
    
        $userall =User::where('is_admin', false)->paginate(20);
     
        return view('dashboard.listeuser', compact( 'userall'));
    }

    public function destroy($id)
    {
      


        $uses = User::where('id', $id)->first();
               if ($uses) {
                     $uses->delete();
            return redirect()->back()->with('success', 'Compte supprimé avec succés ');
        } else {

          
                return redirect()->back()->with('error', 'Utilisateur non trouvé');
            
        }
    }


    


}
