<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;

class PostsController extends Controller
{
    public function index()
    {
        return view('pages.admin.posts.index');
    }

    public function create()
    {
        $categories = Category::all();
        return view('pages.admin.posts.create', compact('categories'));
    }

    public function single_post()
    {
        return view('pages.admin.posts.single_page');
    }

    public function edit()
    {
        return view('pages.admin.posts.edit');
    }
}
