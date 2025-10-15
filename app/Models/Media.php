<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $table = 'media';

    protected $fillable = [
        'type',
        'file_path',
        'alt',
        'order',
    ];

    // Relasi Polymorphic: media bisa dimiliki Batik, Event, Wisata, dll
    public function mediable()
    {
        return $this->morphTo();
    }

    // Scope untuk urutkan media berdasarkan order
    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc');
    }

    public function getUrlAttribute()
    {
        return asset('storage/' . $this->file_path);
    }
}