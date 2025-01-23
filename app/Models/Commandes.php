<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    use HasFactory;

    protected $fillable = [
        'transactionId',
        'Acheteur_nom',
        'Acheteur_prenom',
        'Acheteur_adresse',
        'Acheteur_numero',
        'Acheteur_email',
        'Montant',
        'statut',
        'slug',
    ];

    public function produits()
    {
        return $this->belongsToMany(Produits::class, 'produits_commandes');
    }
}
