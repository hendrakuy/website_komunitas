<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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
        'kapasitas',
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

    // auto generate unique slug from title
    protected static function boot()
    {
        parent::boot();

        // Sebelum membuat (create)
        static::creating(function ($edupackage) {
            $edupackage->slug = self::generateUniqueSlug($edupackage->title);
        });

        // Sebelum mengupdate (update)
        static::updating(function ($edupackage) {
            // Hanya ubah slug kalau title berubah
            if ($edupackage->isDirty('title')) {
                $edupackage->slug = self::generateUniqueSlug($edupackage->title, $edupackage->id);
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
