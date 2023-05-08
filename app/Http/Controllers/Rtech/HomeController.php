<?php

namespace App\Http\Controllers\Rtech;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.rtech.index');
    }
}
