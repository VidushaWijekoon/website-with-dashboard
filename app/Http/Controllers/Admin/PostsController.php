<?php

namespace App\Http\Controllers\Admin;

use App\Models\Posts;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequestForm;

class PostsController extends Controller
{
    public function index()
    {
        return view('pages.admin.posts.index');
    }
}
