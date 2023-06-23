<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostImages extends Model
{
    use HasFactory;

    protected $table = 'post_images';

    protected $fillable = [
        'posts_id',
        'image'
    ];
}
