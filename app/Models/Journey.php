<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journey extends Model
{
    use HasFactory;

    protected $table = 'journeys';

    protected $fillable = [
        'year',
        'title',
        'content',
        'image',
    ];

    // Casting agar year selalu integer
    protected $casts = [
        'year' => 'integer',
    ];
}
