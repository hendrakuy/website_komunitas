<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'start_at',
        'end_at',
        'is_promo',
    ];

    // Casting ke tipe data yang sesuai
    protected $casts = [
        'start_at' => 'datetime',
        'end_at' => 'datetime',
        'is_promo' => 'boolean',
    ];

    // Relasi: Event bisa punya banyak media (gambar/video)
    public function media()
    {
        return $this->morphMany(Media::class, 'mediable')->ordered();
    }

    // Relasi: Event bisa terhubung dengan banyak batik (promo produk)
    // public function batiks()
    // {
    //     return $this->belongsToMany(Batik::class, 'event_batik')->withTimestamps();
    // }
}
