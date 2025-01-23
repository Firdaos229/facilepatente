<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\categories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = categories::all();
        return view('dashboard.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $user = Auth::user();
        // if ($user->is_admin == 0) {
        //     return redirect('/');
        // }
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slug = (string) Str::uuid();


        $request->validate([
            'nom' =>  'required|string|max:255',
            'svg' => 'required',
        ]);

        if ($request->hasFile('svg')) {

            // Récupère le fichier SVG
            $file = $request->file('svg');

            // Crée un nom de fichier unique en utilisant le timestamp et uniqid
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

            // Stocke le fichier dans le dossier 'public/CategoriesSvg' et retourne le chemin du fichier
            $lien = $file->move(public_path('storage/CategoriesSvg'), $filename);
        }

        categories::create([
            'nom' => $request->nom,
            'svg' => 'CategoriesSvg/' . $filename,
            'slug' => $slug,
        ]);


        return redirect()->back()->with('success', 'Catégorie enrégistrée avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        //rechercher l'objet categorie
        $categories = categories::findOrFail($id);
        //dd($request->all());
        return view('dashboard.categories.update', compact('categories'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $categorie = categories::findOrFail($id);

        $request->validate([
            'nom' => 'required|string|max:255',
            'svg' => 'nullable|file',
        ]);

        $categorie->nom = $request->nom;

        if ($request->hasFile('svg')) {
            // Supprimer l'ancienne image si elle existe
            if (file_exists(public_path('storage/' . $categorie->svg))) {
                unlink(public_path('storage/' . $categorie->svg));
            }

            // Stocker la nouvelle image
            $file = $request->file('svg');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage/CategoriesSvg'), $filename);
            $categorie->svg = 'CategoriesSvg/' . $filename;
        }

        $categorie->save();

        return redirect()->back()->with('success', 'Catégorie mise à jour avec succès');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categorie = categories::findOrFail($id);

        // Supprimer l'image associée si elle existe
        if (file_exists(public_path('storage/' . $categorie->svg))) {
            unlink(public_path('storage/' . $categorie->svg));
        }

        $categorie->delete();

        return redirect()->route('categories.index')->with('success', 'Catégorie supprimée avec succès');
    }
}
