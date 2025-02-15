<?php

namespace App\Providers;

use App\Models\Temoignages;
use App\Models\Pricing;
use App\Models\Course;
use App\Models\FooterSetting;
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
            // Récupérer les cours avec la relation 'images'

            $courses = Course::all();

            // Récupérer tous les prix
            $pricings = Pricing::all();

            // Récupérer tous les témoignages
            $temoignages = Temoignages::orderBy('created_at', 'desc')->get();
            $footer = FooterSetting::first();
            // Passer les données à toutes les vues
            $view->with('temoignages', $temoignages)
                ->with('courses', $courses) // Correction ici
                ->with('pricings', $pricings)
                ->with('footer', $footer);
        });
    }
}
