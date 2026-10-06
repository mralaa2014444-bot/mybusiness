<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class License extends Model
{
    protected $fillable = [
        'product_id',
        'user_id',
        'type',
        'license_key',
        'start_date',
        'end_date',
        'status',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date'   => 'date',
        'status'     => 'boolean',
    ];

    /*
    |--------------------------------------------------------------------------
    | العلاقات
    |--------------------------------------------------------------------------
    */

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /*
    |--------------------------------------------------------------------------
    | Accessor: هل الترخيص منتهي الصلاحية؟
    |--------------------------------------------------------------------------
    |
    | $license->is_expired
    |
    */

    public function getIsExpiredAttribute(): bool
    {
        // الترخيص الدائم لا ينتهي أبدًا
        if ($this->end_date === null) {
            return false;
        }

        return Carbon::parse($this->end_date)->isPast();
    }

    /*
    |--------------------------------------------------------------------------
    | Accessor: هل الترخيص فعّال؟
    |--------------------------------------------------------------------------
    |
    | $license->is_active
    |
    */

    public function getIsActiveAttribute(): bool
    {
        if (!$this->status) {
            return false;
        }

        return !$this->is_expired;
    }

    /*
    |--------------------------------------------------------------------------
    | Scope: التراخيص الفعّالة فقط
    |--------------------------------------------------------------------------
    */

    public function scopeActive($query)
    {
        return $query->where('status', true)
            ->where(function ($q) {
                $q->whereNull('end_date')
                  ->orWhereDate('end_date', '>=', now());
            });
    }

    /*
    |--------------------------------------------------------------------------
    | Scope: التراخيص المنتهية
    |--------------------------------------------------------------------------
    */

    public function scopeExpired($query)
    {
        return $query->whereNotNull('end_date')
            ->whereDate('end_date', '<', now());
    }

    /*
    |--------------------------------------------------------------------------
    | دالة: تعطيل الترخيص إذا انتهى
    |--------------------------------------------------------------------------
    */

    public function deactivateIfExpired(): void
    {
        if ($this->status && $this->is_expired) {
            $this->status = false;
            $this->save();
        }
    }
}