<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reduction;

class ReductionController extends Controller
{
    //
    public function index()
    {
        $reduction = Reduction::first();
        return view('dashboard.reduction.form', compact('reduction'));
    }

    public function storeOrUpdate(Request $request)
    {
        $request->validate([
            'prix_reduction' => 'required',
            'libelle' => 'required | string | max:255'
        ]);
        $reduction = Reduction::first();

        if ($reduction) {
            $reduction->update($request->only('prix_reduction', 'libelle'));
        } else {
            Reduction::create($request->only('prix_reduction', 'libelle'));
        }

        return redirect()->route('reductions.index')->with('success', 'Réduction mise à jour avec succès');
    }

    public function destroy()
    {

        $reduction = Reduction::first();

        if ($reduction) {
            $reduction->delete();
        }

        return redirect()->route('reductions.index')->with('success', 'Réduction supprimée');
    }
}
