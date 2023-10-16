<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carts extends Model
{
    use HasFactory;

    protected $fillable = ['quantity','customerId' ,'productId'];

    public function product()
    {
        return $this->belongsTo(products::class, 'productId');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function coupon()
    {
        return $this->belongsTo(coupons::class);
    }
}
