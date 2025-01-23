<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reduction extends Model
{
    use HasFactory;

    protected $fillable = [
        'prix_reduction',
        'libelle',
    ];
}
