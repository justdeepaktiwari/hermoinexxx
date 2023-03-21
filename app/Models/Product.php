<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $fillable = [
        'product_name',
        'product_detail',
        'product_image',
        'product_real_amount',
        'product_percentage_discount',
        'product_discounted_amount',
        'product_sizes',
        'product_colors'
    ];
    public function reviews()
    {
        return $this->hasMany(Review::class, 'product_id')->where('reviews.status', 'verify');
    }
}
