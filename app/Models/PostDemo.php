<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostDemo extends Model
{
    use HasFactory;

    protected $table = 'post_video';

    protected $fillable = [
        'posts_id',
        'video'
    ];
}
