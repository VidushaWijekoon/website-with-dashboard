<?php

namespace App\Http\Controllers\Rtech;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ScienceTechnologyController extends Controller
{
    public function index()
    {
        return view('pages.rtech.science_technology');
    }
}
