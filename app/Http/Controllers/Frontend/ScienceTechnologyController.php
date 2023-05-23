<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Posts;

class ScienceTechnologyController extends Controller
{
    public function index()
    {
        $posts = Posts::all();
        return view('pages.frontend.science_technology', compact('posts'));
    }

    public function view(Posts $post)
    {
        return view('pages.frontend.single_post', compact('post'));
    }
}
