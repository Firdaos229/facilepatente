<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DriverLicense extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lastname',
        'address',
        'license_class',
        'phone',
        'village',
        'payment_options',
        'email',
        'message',
    ];

    protected $casts = [
        'payment_options' => 'array',  // Pour convertir le champ JSON en tableau
    ];
}
