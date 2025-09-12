<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edupackage extends Model
{
    use HasFactory;

    protected $table = 'edupackages';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'price',
        'features',
    ];

    /**
     * Casting kolom agar otomatis terkonversi.
     */
    protected $casts = [
        'price' => 'decimal:2',
        'features' => 'array', // JSON otomatis jadi array
    ];

    /**
     * Relasi morphMany ke Media (gambar/video).
     */
    public function media()
    {
        return $this->morphMany(Media::class, 'mediable');
    }
}
