<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostFormRequest;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('pages.admin.posts.index',);
    }

    public function create()
    {
        $categories = Category::all();
        return view('pages.admin.posts.create', compact('categories'));
    }
}
