<?php

namespace App\Http\Controllers;

use App\Models\temoignages;
use Illuminate\Http\Request;

class TemoignageController extends Controller
{
    public function index()
    {
        $temoignages = temoignages::all();
        return view('temoignages.index', compact('temoignages'));
    }

    public function create()
    {
        return view('temoignages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom_utulisateur' => 'required|string|max:255',
            'photo_utulisateur' => 'image',
            'commentaire' => 'required',
        ]);

        $filename = null;
        if ($request->hasFile('photo_utulisateur')) {
            $file = $request->file('photo_utulisateur');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move('storage/temoignages/', $filename);
        }

        temoignages::create([
            'nom_utulisateur' => $request->nom_utulisateur,
            'photo_utulisateur' => $filename ? 'temoignages/' . $filename : null,
            'commentaire' => $request->commentaire,
        ]);

        return redirect()->route('temoignages.index')->with('success', 'Témoignage ajouté avec succès.');
    }

    public function edit(temoignages $temoignage)
    {
        return view('temoignages.edit', compact('temoignage'));
    }

    public function update(Request $request, temoignages $temoignage)
    {
        $request->validate([
            'nom_utulisateur' => 'required|string|max:255',
            'photo_utulisateur' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'commentaire' => 'required|string',
        ]);

        if ($request->hasFile('photo_utulisateur')) {
            $file = $request->file('photo_utulisateur');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move('storage/temoignages/', $filename);
            $temoignage->photo_utulisateur = 'temoignages/' . $filename;
        }

        $temoignage->nom_utulisateur = $request->nom_utulisateur;
        $temoignage->commentaire = $request->commentaire;
        $temoignage->save();

        return redirect()->route('temoignages.index')->with('success', 'Témoignage modifié avec succès.');
    }

    public function destroy(temoignages $temoignage)
    {
        if ($temoignage->photo_utulisateur && file_exists(public_path('storage/' . $temoignage->photo_utulisateur))) {
            unlink(public_path('storage/' . $temoignage->photo_utulisateur));
        }
        $temoignage->delete();

        return redirect()->route('temoignages.index')->with('success', 'Témoignage supprimé avec succès.');
    }
}
