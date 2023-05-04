<?php

namespace App\Http\Controllers\Rtech;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventManagementController extends Controller
{
    public function index()
    {
        return view('pages.rtech.event_management');
    }
}
