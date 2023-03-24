<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class backup_videos extends Model
{
    use HasFactory;
    protected $fillable = [
        'old_name', 'new_name'
    ];
}
