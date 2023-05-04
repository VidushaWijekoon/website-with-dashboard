<?php

namespace App\Http\Controllers\Rtech\IT;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebDevelopmentController extends Controller
{
    public function index()
    {
        return view('pages.rtech.IT.web_development');
    }
}
