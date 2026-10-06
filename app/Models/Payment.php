<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
        'license_type',
        'amount',
        'currency',
        'status',
        'payment_method',
        'transaction_id',
    ];


    // ==========================================
    // المستخدم صاحب عملية الدفع
    // ==========================================

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    // ==========================================
    // المنتج الذي تم شراؤه
    // ==========================================

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}