<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('pages.admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('pages.admin.category.create');
    }

    public function store(CategoryFormRequest $request)
    {
        $validatedData = $request->validated();
        $category = new Category;

        $category->name = $validatedData['name'];
        $category->code = $validatedData['code'];
        $category->status = $request->status == true ? '1' : '0';

        $category->save();
        return redirect(route('category.index'))->with('message', 'Successfully Created Category');
    }

    public function edit(Category $category)
    {
        return view('pages.admin.category.edit', compact('category'));
    }

    public function update(CategoryFormRequest $request, $category)
    {
        $category = Category::findOrFail($category);
        $validatedData = $request->validated();

        $category->name = $validatedData['name'];
        $category->code = $validatedData['code'];
        $category->status = $request->status == true ? '1' : '0';

        $category->update();
        return redirect(route('category.index'))->with('message', 'Successfully Updated Category');
    }

    public function delete($category)
    {
        $category = Category::findOrFail($category);
        $category->delete();
        return redirect(route('category.index'))->with('message', 'Successfully Delete Category');
    }
}
