<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Umkm extends Model
{
    use HasFactory;

    protected $table = 'umkms';

    protected $fillable = [
        'name',
        'owner',
        'phone',
        'about',
        'address',
        'logo',
        'background_image',
    ];

    // Relasi: UMKM punya banyak Batik
    public function batiks()
    {
        return $this->hasMany(Batik::class);
    }

    protected static function booted()
    {
        static::updating(function ($umkm) {
            // Daftar field gambar yang mau dicek
            $imageFields = ['logo', 'background_image'];

            foreach ($imageFields as $field) {
                if ($umkm->isDirty($field)) {
                    $oldFile = $umkm->getOriginal($field);
                    if ($oldFile && Storage::disk('public')->exists($oldFile)) {
                        Storage::disk('public')->delete($oldFile);
                    }
                }
            }
        });

        static::deleting(function ($umkm) {
            $imageFields = ['logo', 'background_image'];

            foreach ($imageFields as $field) {
                $file = $umkm->{$field};
                if ($file && Storage::disk('public')->exists($file)) {
                    Storage::disk('public')->delete($file);
                }
            }
        });
    }
}
