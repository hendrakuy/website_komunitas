<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motif extends Model
{
    use HasFactory;

    protected $table = 'motifs';

    protected $fillable = [
        'name',
        'slug',
    ];

    // Relasi: Motif bisa dipakai di banyak Batik
    public function batiks()
    {
        return $this->belongsToMany(Batik::class, 'batik_motif')
                    ->withTimestamps();
    }
}
