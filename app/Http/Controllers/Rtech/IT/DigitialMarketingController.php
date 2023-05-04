<?php

namespace App\Http\Controllers\Rtech\IT;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DigitialMarketingController extends Controller
{
    public function index()
    {
        return view('pages.rtech.IT.digital_marketing');
    }
}
