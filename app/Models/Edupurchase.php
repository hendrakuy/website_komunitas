<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edupurchase extends Model
{
    use HasFactory;

    protected $table = 'edupurchases';

    protected $fillable = [
        'edupackage_id',
        'buyer_name',
        'phone',
        'message',
        'status',
    ];

    /**
     * Casting kolom
     */
    protected $casts = [
        'status' => 'string',
    ];

    /**
     * Relasi ke Edupackage
     */
    public function edupackage()
    {
        return $this->belongsTo(Edupackage::class);
    }
}
