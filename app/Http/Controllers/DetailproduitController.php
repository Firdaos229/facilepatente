<?php

namespace App\Http\Controllers;

use App\Models\Avis_acheteurs;
use Illuminate\Http\Request;
use App\Models\Produits;

class DetailproduitController extends Controller
{
    //
    public function show($slug, Request $request)
    {
        // Utilisez where pour trouver le produit par slug
        $product = Produits::with('images')->where('slug', $slug)->firstOrFail();
    
        return view('pages.product-details', compact('product'));
    }
    
}
