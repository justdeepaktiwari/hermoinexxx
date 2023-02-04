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
        return $this->hasOne(Role::class, "id", "subscription_type_id");
    }
}
