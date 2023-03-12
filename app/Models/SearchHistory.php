<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchHistory extends Model
{
    use HasFactory;
    protected $fillable = ["user_id", "search"];

    public function relatedSearch()
    {
        return $this->hasOne(Tag::class, "name", "search");
    }
}
