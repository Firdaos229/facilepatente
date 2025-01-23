<?php

namespace App\Providers;

use App\Models\categories;
use App\Models\Footers;
use App\Models\Produits;
use App\Models\Publicite;
use App\Models\Reduction;
use App\Models\temoignages;
use Illuminate\Routing\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Composer pour partager des données avec toutes les vues
        view()->composer('*', function ($view) {
            // Récupérer toutes les catégories
            $categories = Categories::all();
    
            // Récupérer les produits avec leurs images, ordonnés par ID et mélangés aléatoirement
            $produits = Produits::with('images')
                ->inRandomOrder()
                ->paginate(12);

                $produits_aleatoire = Produits::with('images') 
                ->inRandomOrder()
                ->paginate(12);

                $produitsboutiques = Produits::with('images')
                ->orderBy('id', 'desc')
                ->paginate(18);

                $produitsronds = Produits::with('images')
                ->limit(8)
                ->inRandomOrder()
                ->get(); // Exécuter la requête pour obtenir les résultats
            

                $pubs = Publicite::all();

                $footer = Footers::first();

                $temoignages = temoignages::orderBy('created_at', 'desc')->get();
    
            // Récupérer la première réduction
            $reduction = Reduction::first();
    
            // Passer les données à toutes les vues
            $view->with('categories', $categories)
                 ->with('produits', $produits)
                 ->with('produitsronds', $produitsronds)
                 ->with('produitsboutiques', $produitsboutiques)
                 ->with('produits_aleatoire', $produits_aleatoire)
                 ->with('pubs', $pubs)
                 ->with('footer', $footer)
                 ->with('temoignages', $temoignages)
                 ->with('reduction', $reduction);
        });

        
    }


}
