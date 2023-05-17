<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientMessagesController extends Controller
{
    public function index()
    {
        return view('pages.admin.client-messages.index');
    }
}