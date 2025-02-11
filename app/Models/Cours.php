<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cours extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'total_courses',
        'slug'
    ];

    public function images()
    {
        return $this->hasMany(Images::class, 'cours_id');
    }
}
