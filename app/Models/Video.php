<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;
use Stripe\Subscription;

class Video extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'video_title',
        'video_url',
        'video_detail',
        'subscription_type_id',
    ];

    public function subscription(){
        return $this->hasOne(UserSubscrption::class, "id", "subscription_type_id");
    }
}
