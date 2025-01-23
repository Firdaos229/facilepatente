<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    use HasFactory;

    protected $fillable = [
        'idCat',
        'nom',
        'description',
        'details',
        'prix',
        'quantite',
        'statut',
        'slug'
    ];
    public function images()
    {
        return $this->hasMany(Images::class, 'idPro');
    }
    public function categorie()
    {
        return $this->belongsTo(Categories::class, 'idCat');
    }
}
