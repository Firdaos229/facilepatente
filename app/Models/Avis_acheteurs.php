<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avis_acheteurs extends Model
{
    use HasFactory;

    protected $fillable = [
        'produit_id',
        'acheteur_id',
        'avis',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'acheteur_id');
    }
}
