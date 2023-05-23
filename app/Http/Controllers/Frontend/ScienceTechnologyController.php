<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;

class ScienceTechnologyController extends Controller
{
    public function index()
    {
        $posts = Posts::all();
        return view('pages.frontend.science_technology', compact('posts'));
    }

    public function view(Posts $posts)
    {
        return view('pages.frontend.single_post', compact('posts'));
    }
}
