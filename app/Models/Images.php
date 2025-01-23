<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    protected $fillable = [
        'idPro',
        'filename',
    ];

  public function produit(){
    return $this->belongsTo(Produits::class,'idPro');
  }
}
