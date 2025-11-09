<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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
        'image',
    ];

    /**
     * Relasi morphMany ke Media (gambar, video, dll).
     */
    public function media()
    {
        return $this->morphMany(Media::class, 'mediable');
    }

    // auto generate unique slug from title
    protected static function boot()
    {
        parent::boot();

        // Sebelum membuat (create)
        static::creating(function ($wisata) {
            $wisata->slug = self::generateUniqueSlug($wisata->title);
        });

        // Sebelum mengupdate (update)
        static::updating(function ($wisata) {
            // Hanya ubah slug kalau title berubah
            if ($wisata->isDirty('title')) {
                $wisata->slug = self::generateUniqueSlug($wisata->title, $wisata->id);
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
