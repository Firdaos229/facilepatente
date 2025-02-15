<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        $pricings = Pricing::all();
        return view('dashboard.pricings.index', compact('pricings'));
    }

    public function create()
    {
        return view('dashboard.pricings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'price' => 'required|numeric',
            'features' => 'required|string',
        ]);

        // Transformer la chaîne en tableau
        $featuresArray = array_map('trim', explode(',', $request->features));

        Pricing::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'price' => $request->price,
            'features' => json_encode($featuresArray), // Stocker en JSON
        ]);

        return redirect()->back()->with('success', 'Prezzo aggiunto!');
    }

    public function update(Request $request, Pricing $pricing)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'price' => 'required|numeric',
            'features' => 'required|string',
        ]);

        $featuresArray = array_map('trim', explode(',', $request->features));

        $pricing->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'price' => $request->price,
            'features' => json_encode($featuresArray), // Stocker en JSON
        ]);

        return redirect()->back()->with('success', 'Prezzo aggiornato!');
    }


    // public function edit(Pricing $pricing)
    // {
    //     return view('dashboard.pricings.update', compact('pricing'));
    // }
    public function edit($id)
    {
        $pricing = Pricing::findOrFail($id);
        return view('dashboard.pricings.update', compact('pricing'));
    }



    public function destroy(Pricing $pricing)
    {
        $pricing->delete();

        return redirect()->route('displayCourses')
            ->with('success', 'Prezzo rimosso!');
    }
}
