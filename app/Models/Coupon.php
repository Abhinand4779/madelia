<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = [
        'code',
        'discount_type',
        'discount_amount',
        'visibility',
        'expiry_date',
        'is_active',
    ];

    protected $casts = [
        'discount_amount' => 'decimal:2',
        'is_active' => 'boolean',
        'expiry_date' => 'date',
    ];
}
