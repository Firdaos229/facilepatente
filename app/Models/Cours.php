<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cours extends Model
{
    use HasFactory;
    
    protected $fillable = ['nom', 'nombre_cours'];

    public function image()
    {
        return $this->hasOne(Images::class, 'cours_id');
    }
}
