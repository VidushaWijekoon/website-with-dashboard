<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('pages.admin.categories.index');
    }

    public function create()
    {
        return view('pages.admin.categories.create');
    }

    public function edit()
    {
        return view('pages.admin.categories.edit');
    }
}