<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    ];

    // Relasi: UMKM punya banyak Batik
    public function batiks()
    {
        return $this->hasMany(Batik::class);
    }
}
