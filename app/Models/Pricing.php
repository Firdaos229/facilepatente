<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pricing extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'subtitle', 'price', 'features'];

    protected $casts = [
        'features' => 'array',
    ];
}
