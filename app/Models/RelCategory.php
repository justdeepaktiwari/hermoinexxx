<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelCategory extends Model
{
    use HasFactory;
    protected $fillable = ['video_id', 'category_id'];

    public function category()
    {
        return $this->hasOne(Category::class, "id", "category_id");
    }
}
