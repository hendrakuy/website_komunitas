<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;

    protected $table = 'wisatas';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'address',
        'lat',
        'lng',
    ];

    /**
     * Relasi morphMany ke Media (gambar, video, dll).
     */
    public function media()
    {
        return $this->morphMany(Media::class, 'mediable');
    }
}
