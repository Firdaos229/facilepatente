<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produits_commandes extends Model
{
    use HasFactory;

    protected $fillable = [
        'commande_id',
        'produit_id',
        'produit_image',
        'payé',
        'acheteur_id',
        'vendeur_id',
        'quantite',
        'prix',
        'statut',
        
    ];

    public function produit()
    {
        return $this->belongsTo(Produits::class, 'produit_id');
    }
    public function vendeur()
    {
        return $this->belongsTo(User::class, 'vendeur_id');
    }
}
