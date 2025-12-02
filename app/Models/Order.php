<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'product_name',
        'product_price', 
        'quantity',
        'total_amount',
        'commission',
        'commission_rate',
        'status',
        'payment_method',
        'note',
        'order_date',
    ];

    protected $casts = [
        'product_price' => 'decimal:2',
        'total_amount' => 'decimal:2',
        'commission' => 'decimal:2',
        'commission_rate' => 'decimal:2',
        'order_date' => 'date',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($order) {
            if (empty($order->order_date)) {
                $order->order_date = now();
            }
            $order->calculateCommission();
        });

        static::updating(function ($order) {
            $order->calculateCommission();
        });
    }

    public function calculateCommission()
    {
        $this->commission = $this->total_amount * ($this->commission_rate / 100);
    }

    // Auto generate order number jika butuh identifier
    public function getOrderNumberAttribute()
    {
        return 'ORDER-' . str_pad($this->id, 5, '0', STR_PAD_LEFT);
    }
}
