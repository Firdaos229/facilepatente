<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produits;
use App\Models\Images;
use App\Models\Categories;
use App\Models\Avis_acheteurs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProduitsController extends Controller
{
    //Récupérations des produits

    public function index()
    {

        $produits = Produits::with('images')
            ->Orderby('id', 'desc')
            ->paginate(12);


        return view('dashboard.products.index', compact('produits'));
    }
    public function edit($id)
    {
        $produit = Produits::findOrFail($id);
        $categories = Categories::all();
        return view('dashboard.products.update', compact('produit', 'categories'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();
        return view('dashboard.products.create', compact('categories'));
    }


    public function store(Request $request)
    {
        $slug = (string) Str::uuid();
        $request->validate([
            'idCat' => ['required', 'string', 'max:255'],
            'nom' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'details' => ['required', 'string'],
            'prix' => ['required', 'string', 'max:255'],
            'quantite' => ['required', 'string', 'max:255'],
        ]);

        $produits = new produits();
        $produits->idUser = Auth::id();
        $produits->idCat = $request->idCat;
        $produits->nom = $request->nom;
        $produits->description = $request->description;
        $produits->details = $request->details;
        $produits->prix = $request->prix;
        $produits->quantite = $request->quantite;
        $produits->slug = $slug;
        $produits->save();



        if ($request->hasFile('image')) {
            $uploadedImages = [];

            foreach ($request->file('image') as $file) {
                $ext = $file->getClientOriginalExtension();
                $filename = time() . '_' . uniqid() . '.' . $ext;

                // Déplacement le fichier vers le dossier de destination
                $file->move('storage/uploads/', $filename);

                // Enregistrement du chemin du fichier dans le tableau
                $uploadedImages[] = $filename;

                // stocker dans la base de données pour chaque image
                images::create([
                    'idPro' => $produits->id,
                    'filename' => 'uploads/' . $filename,
                ]);
            }
        }


        return redirect()->back()->with('success', 'Votre Produit a été ajouté avec succès et est en cours de validation.');
    }




    public function update(Request $request, produits $produit)
    {

        $request->validate([
            'idCat' => ['required', 'integer'],
            'nom' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'details' => ['required', 'string'],
            'prix' => ['required', 'numeric', 'min:0'],
            'quantite' => ['required', 'integer', 'min:0'],
        ]);



        $produit->idCat = $request->input('idCat');
        $produit->nom = $request->input('nom');
        $produit->prix = $request->input('prix');
        $produit->description = $request->input('description');
        $produit->details = $request->input('details');
        $produit->quantite = $request->input('quantite');
        $produit->save();


        return redirect()->back()->with('success', 'Produit mis à jour avec succès.');
    }


    public function editimage(produits $produit)
    {

        // Récupère toutes les images associées au produit
        $images = images::where('idPro', $produit->id)->get();

        return view('dashboard.products.editimage', compact('images', 'produit'));
    }

    public function updateimage(Request $request, images $image)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,tif,tiff|max:5120',
        ]);

        if ($image->filename && Storage::disk('public')->exists($image->filename)) {
            Storage::disk('public')->delete($image->filename);
        }
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $lien = $file->move('storage/uploads/', $filename);
        }

        $image->update(['filename' => 'uploads/' . $filename,]);


        return redirect()->back()->with('success', 'Image mise à jour avec succès.');
    }

    public function destroy(produits $produit)
    {

        $produit->images()->delete();

        $produit->delete();

        return redirect()->route('displayProducts')
            ->with('success', 'Le produit a été supprimé de la boutique');
    }


    //Barre de recherche
    public function barrerecherche(Request $request) {
        $search_term = $request->input('search');
    
        $produit_correspondant = Produits::where('nom', 'like', '%' . $search_term . '%')
                                          ->paginate(18);
    
        return view('pages.shop-mixed-recherche', compact('produit_correspondant', 'search_term'));
    }


    //Avis sur un produit
    public function avissurunproduit(Request $request, $id)
    {
        // Validation des données
        $request->validate([
            'avis' => 'required|string|max:1000',
        ]);

        $user = Auth::user();

        // Création de l'avis
        $avis = new avis_acheteurs();
        $avis->produit_id = $id;
        $avis->avis = $request->input('avis');
        $avis->acheteur_id = $user->id;
        $avis->save();

        return redirect()->back()->with('success', 'Votre commentaire a bien été envoyé.');
    }

    //Affichage des produits par categories
    public function showByCategory($slug)
    {
        // Rechercher la catégorie par son slug
        $category = Categories::where('slug', $slug)->first();
    
        // Si la catégorie n'existe pas, retourner une erreur 404
        if (!$category) {
            abort(404, 'Categorie non trouvée');
        }
    
        // Rechercher les produits liés à cette catégorie
        $produitsparcategorie = Produits::where('idCat', $category->id)
            ->paginate(18);
    
        // Retourner la vue avec les données
        return view('pages.shop-mixed-categorie', ['category' => $category, 'produitsparcategorie' => $produitsparcategorie]);
    }
    

//Filtre par prix 

public function filter(Request $request)
{
    // Récupérer la valeur du filtre
    $prix = $request->input('prix');
    
   

    // Filtrer les produits
    $produitsavecfiltre = Produits::whereRaw('CAST(prix AS UNSIGNED) < ?', [$prix])
    ->orderBy('prix', 'asc')
    ->paginate(18);



    // Retourner la vue avec les produits filtrés
    return view('pages.shop-mixed-filtre', compact('produitsavecfiltre'));
}

}
