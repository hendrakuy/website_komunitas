<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InstagramPost extends Model
{
    use HasFactory;

    protected $table = 'instagram_post';

    protected $fillable = [
        'image',
        'caption',
        'link',
        'is_active',
        'order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    // public function getThumbnailUrlAttribute()
    // {
    //     return asset('storage/' . str_replace('uploads/instagram_post/', 'uploads/instagram_post/thumbnails/', $this->image));
    // }
}
