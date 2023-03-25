<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'payment_id',
        'amount',
        'billing_details',
        'balance_transaction',
        'payment_method',
        'fingerprint',
        'last4',
        'cvc_check',
        'receipt_url',
        'payment_method_details',
        'status',
        'type'
    ];
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
