<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('pages.admin.employees.index');
    }

    public function leave()
    {
        return view('pages.admin.employees.leaves');
    }

    public function holidays()
    {
        return view('pages.admin.employees.holidays');
    }

    public function attendance()
    {
        return view('pages.admin.employees.attendance');
    }
}
