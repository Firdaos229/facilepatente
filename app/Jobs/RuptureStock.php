<?php

namespace App\Jobs;

use App\Models\Produits;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class RuptureStock implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    public function handle()
    {
        // Récupérer les produits avec des quantités inférieures à 10
        $lowStockProducts = Produits::where('quantite', '<', 10)->get();

        // Construire un message pour l'administrateur
        $messageContent = "Les produits suivants ont des quantités faibles :\n\n";
        foreach ($lowStockProducts as $product) {
            $messageContent .= "Produit : {$product->nom}, Quantité restante : {$product->quantite}\n";
        }

        // Envoyer un email à l'administrateur
        Mail::raw($messageContent, function ($message) {
            $message->from('noreply@votresite.com', 'HAVENGADGET');
            $message->to('admin@gmail.com')->subject('Alerte : Stock bas pour certains produits');
        });

       
    }

}
