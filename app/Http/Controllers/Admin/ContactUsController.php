<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;


class ContactUsController extends Controller
{

    public function index()
    {

        $contact_us_messages = ContactUs::all();
        return view('pages.admin.contact_us.index', compact('contact_us_messages'));
    }
}
