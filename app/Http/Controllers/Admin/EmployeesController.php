<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
    {
        return view('pages.admin.employees.index');
    }

    public function create()
    {
        return view('pages.admin.employees.create');
    }
}