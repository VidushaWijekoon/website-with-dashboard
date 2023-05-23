<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTitleImage extends Model
{
    use HasFactory;

    protected $table = 'post_title_image';

    protected $fillable = [
        'posts_id',
        'title_image'
    ];
}
