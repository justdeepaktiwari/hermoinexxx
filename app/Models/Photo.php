<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo_title',
        'photo_url',
        'photo_detail',
        'subscription_type_id',
    ];

    public function subscription(){
        return $this->hasOne(UserSubscrption::class, "id", "subscription_type_id");
    }

    
    public function rel_category(){
        return $this->hasMany(RelPhotoCategory::class, "photo_id", "id");
    }

    public function rel_tag(){
        return $this->hasMany(RelPhotoTag::class, "photo_id", "id");
    }
}
