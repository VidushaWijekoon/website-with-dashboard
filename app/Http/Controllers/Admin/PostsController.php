<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        return view('pages.admin.posts.index');
    }

    public function create()
    {
        return view('pages.admin.posts.create');
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