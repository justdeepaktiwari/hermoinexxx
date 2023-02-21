<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelPhotoTag extends Model
{
    use HasFactory;

    protected $fillable = ['photo_id', 'tag_id'];

    public function tag()
    {
        return $this->hasOne(Tag::class, "id", "tag_id");
    }
}
