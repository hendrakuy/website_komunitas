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
        'materials',
        'facilities',
        'schedule_info',
        'price',
        'whatsapp_link',
        'image',
        'is_active',
    ];

    /**
     * Casting kolom agar otomatis terkonversi.
     */
    protected $casts = [
        'materials' => 'array',
        'facilities' => 'array',
        'schedule_info' => 'array',
        'is_active' => 'boolean',
    ];

    /**
     * Relasi morphMany ke Media (gambar/video).
     */
    public function media()
    {
        return $this->morphMany(Media::class, 'mediable');
    }
}
