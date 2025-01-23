<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footers extends Model
{
   
    use HasFactory;
    protected $fillable = [
        'description',
        'Conditions_generale',
        'politique_de_confidentialite',
        'email',
        'phone',
    ];
}
