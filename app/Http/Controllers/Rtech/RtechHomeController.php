<?php

namespace App\Http\Controllers\Rtech;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class RtechHomeController extends Controller
{

    protected $message;

    public function __construct()
    {
        $this->message = new ContactUs();
    }

    public function index()
    {
        return view('pages.rtech.index');
    }
}
