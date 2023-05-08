<?php

namespace App\Http\Controllers\Rtech;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUsFormRequest;
use App\Models\ContactUs;

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

    public function store(ContactUsFormRequest $request)
    {
        $validatedData = $request->validated();
        $contact_us = new ContactUs();

        $contact_us->contact_us_messanger_fullname = $validatedData['contact_us_messanger_fullname'];
        $contact_us->contact_us_title = $validatedData['contact_us_title'];
        $contact_us->contact_us_subject = $validatedData['contact_us_subject'];
        $contact_us->contact_us_message = $validatedData['contact_us_message'];

        $contact_us->save();
        return redirect()->back()->with('message', 'Message Successfully Send to Rtech Internationa IT Team');
    }
}
