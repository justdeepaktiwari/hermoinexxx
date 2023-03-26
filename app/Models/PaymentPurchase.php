<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentPurchase extends Model
{
    use HasFactory;
    protected $fillable = [
        'payment_id',
        'user_id',
        'product_name',
        'product_detail',
        'product_image',
        'product_real_amount',
        'product_percentage_discount',
        'product_discounted_amount',
        'purchase_amount',
        'purchase_total_amount',
        'product_sizes',
        'product_colors',
        'quantity'
    ];
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
