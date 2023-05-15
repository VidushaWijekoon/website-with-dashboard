<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'post_category_id',
        'post_title',
        'post_description',
        'post_file',
        'meta_category_id',
        'post_meta_title',
        'post_meta_description',
        'status'
    ];
}
