<?php

namespace App\Http\Controllers\Rtech;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUsFormRequest;
use App\Models\ContactUs;

class RtechHomeController extends Controller
{

    public function index()
    {
        return view('pages.rtech.index');
    }
}
