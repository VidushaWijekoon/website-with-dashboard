<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebDevelopmentController extends Controller
{
    public function index()
    {
        return view('pages.frontend.IT.web_development');
    }
}
