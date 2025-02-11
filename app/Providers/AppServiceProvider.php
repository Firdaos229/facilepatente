<?php

namespace App\Providers;

use App\Models\temoignages;
use App\Models\Cours;
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
            $cours = Cours::with('images')
                ->Orderby('id', 'desc')
                ->inRandomOrder()
                ->paginate(12);

                $temoignages = temoignages::orderBy('created_at', 'desc')->get();
    
            // Passer les données à toutes les vues
            $view->with('temoignages', $temoignages)
            ->with('cours', $cours);
        });

        
    }


}
