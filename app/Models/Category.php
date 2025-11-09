<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    public function batiks()
    {
        return $this->hasMany(Batik::class);
    }

    protected static function boot()
    {
        parent::boot();

        // Saat membuat (create)
        static::creating(function ($category) {
            if (empty($category->slug) && !empty($category->name)) {
                $category->slug = static::generateUniqueSlug($category->name);
            }
        });

        // Saat mengupdate (update)
        static::updating(function ($category) {
            if ($category->isDirty('name') && !empty($category->name)) {
                $category->slug = static::generateUniqueSlug($category->name, $category->id);
            }
        });
    }

    /**
     * Generate unique slug dari name
     */
    protected static function generateUniqueSlug($name, $ignoreId = null)
    {
        if (empty($name)) {
            return null;
        }

        $slug = Str::slug($name);
        $originalSlug = $slug;
        $count = 1;

        while (
            static::where('slug', $slug)
            ->when($ignoreId, fn($query) => $query->where('id', '!=', $ignoreId))
            ->exists()
        ) {
            $slug = "{$originalSlug}-{$count}";
            $count++;
        }

        return $slug;
    }
}
