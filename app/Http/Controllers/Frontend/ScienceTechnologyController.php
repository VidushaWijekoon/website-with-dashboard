<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScienceTechnologyController extends Controller
{
    public function index()
    {
        return view('pages.frontend.science_technology');
    }
}
