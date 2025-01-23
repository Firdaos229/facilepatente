<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class temoignages extends Model
{
   
    protected $fillable = [
        'nom_utulisateur',
        'photo_utulisateur',
        'commentaire',
    ];
}
