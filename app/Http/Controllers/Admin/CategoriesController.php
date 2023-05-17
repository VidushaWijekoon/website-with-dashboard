<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequestForm;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('pages.admin.category.index');
    }

    public function create()
    {
        return view('pages.admin.category.create');
    }

    public function store(CategoryRequestForm $request)
    {
        $validated = $request->validated();
        $category = new Category();

        $category->category_name = $validated['category_name'];
        $category->category_slug = $validated['category_slug'];
        $category->status = $request->status == true ? '1' : 0;

        $category->save();
        return redirect(route('category.index'))->with('message', 'Category Added Successfully');
    }

    public function edit(Category $category)
    {
        return view('pages.admin.category.edit', compact('category'));
    }
}