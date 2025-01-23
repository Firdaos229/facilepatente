<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public $table = 'categories';

    protected $fillable = [
        'nom',
        'svg',
        'slug'
    ];

    protected $casts = [
        'nom' => 'string',
        'svg' => 'string'
    ];

    protected static array $rules = [
        'nom' => 'required',
        'svg' => 'required'
    ];


    public function produits()
    {
        return $this->hasMany(Produits::class, 'idCat');
    }
}
