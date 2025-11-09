<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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
        'image',
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

    // protected static function boot()
    // {
    //     parent::boot();
    //     static::saving(function ($event) {
    //         if (empty($event->slug)) {
    //             $event->slug = Str::slug($event->title);
    //         }
    //     });
    // }

    // auto generate unique slug from title
    protected static function boot()
    {
        parent::boot();

        // Sebelum membuat (create)
        static::creating(function ($event) {
            $event->slug = self::generateUniqueSlug($event->title);
        });

        // Sebelum mengupdate (update)
        static::updating(function ($event) {
            // Hanya ubah slug kalau title berubah
            if ($event->isDirty('title')) {
                $event->slug = self::generateUniqueSlug($event->title, $event->id);
            }
        });
    }

    /**
     * Generate unique slug dari title
     */
    protected static function generateUniqueSlug($title, $ignoreId = null)
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $count = 1;

        // Cek apakah slug sudah ada
        while (
            self::where('slug', $slug)
                ->when($ignoreId, fn($query) => $query->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = "{$originalSlug}-{$count}";
            $count++;
        }

        return $slug;
    }
}
