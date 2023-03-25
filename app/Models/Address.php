<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'line1',
        'line2',
        'city',
        'state',
        'country',
        'postal_code'
    ];
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
