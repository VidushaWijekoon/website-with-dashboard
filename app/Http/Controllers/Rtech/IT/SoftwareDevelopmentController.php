<?php

namespace App\Http\Controllers\Rtech\IT;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SoftwareDevelopmentController extends Controller
{
    public function index()
    {
        return view('pages.rtech.IT.software_development');
    }
}
