<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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

    protected static function boot()
    {
        parent::boot();

        // Hapus gambar lama saat update
        static::updating(function ($journey) {
            if ($journey->isDirty('image')) {
                $oldImage = $journey->getOriginal('image');
                if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });

        // Hapus gambar saat data dihapus
        static::deleting(function ($journey) {
            if ($journey->image && Storage::disk('public')->exists($journey->image)) {
                Storage::disk('public')->delete($journey->image);
            }
        });
    }
}
