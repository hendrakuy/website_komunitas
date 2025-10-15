<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Batik extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'batiks';

    // Kolom yang boleh diisi
    protected $fillable = [
        'category_id',
        'umkm_id',
        'user_id',
        'title',
        'slug',
        'description',
        'material',
        'size',
        'price',
        'specs',
        'image',
    ];

    protected $casts = [
        'specs' => 'array',
        'price' => 'decimal:2',
    ];

    // Relasi: Batik milik satu kategori
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relasi: Batik milik satu UMKM (opsional)
    public function umkm()
    {
        return $this->belongsTo(Umkm::class);
    }

    // Relasi: Batik milik user (admin/seller)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi: Batik bisa punya banyak motif
    public function motifs()
    {
        return $this->belongsToMany(Motif::class, 'batik_motif')
                    ->withTimestamps();
    }

    // Relasi: Batik bisa punya banyak media (polymorphic)
    public function media()
    {
        return $this->morphMany(\App\Models\Media::class, 'mediable');
    }

    // Relasi: Batik bisa muncul di banyak event (promo)
    // public function events()
    // {
    //     return $this->belongsToMany(Event::class, 'event_batik')
    //                 ->withTimestamps();
    // }

    protected static function boot() 
    {
        parent::boot();
        static::saving(function ($batik) {
            if (empty($batik->slug)) {
                $batik->slug = Str::slug($batik->title);
            }
        });
    }
}
