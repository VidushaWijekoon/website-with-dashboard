<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermAndConditionsController extends Controller
{
    public function index()
    {
        return view('pages.frontend.terms_and_conditons');
    }
}