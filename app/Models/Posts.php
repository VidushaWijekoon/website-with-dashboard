<?php

namespace App\Models;

use App\Models\PostDemo;
use App\Models\PostImages;
use App\Models\PostDocument;
use App\Models\PostTitleImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Posts extends Model
{
    use HasFactory;

    protected $table = "posts";

    protected $fillable = [
        'title',
        'slug',
        'category',
        'post_summery',
        'post_description',
        'contact_number',
        'contact_email',
        'pricing',
        'post_status',
        'conditions',
        'created_by'
    ];

    public function postImages()
    {
        return $this->hasMany(PostImages::class, 'posts_id', 'id');
    }

    public function postDemoVideo()
    {
        return $this->hasMany(PostDemo::class, 'posts_id', 'id');
    }

    public function postDocument()
    {
        return $this->hasMany(PostDocument::class, 'posts_id', 'id');
    }

    public function postTitleImage()
    {
        return $this->hasMany(PostTitleImage::class, 'posts_id', 'id');
    }
}
