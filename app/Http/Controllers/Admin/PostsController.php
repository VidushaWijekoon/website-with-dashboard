<?php

namespace App\Http\Controllers\Admin;

use App\Models\Posts;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequestForm;

class PostsController extends Controller
{
    public function index()
    {
        return view('pages.admin.posts.index');
    }

    public function create()
    {
        $categories = Category::all();
        return view('pages.admin.posts.create', compact('categories'));
    }

    public function store(PostRequestForm $request)
    {
        $validatedData = $request->validated();
        $posts = new Posts;
        $posts->post_category_id = Category::findOrFail($validatedData['category_id']);

        $posts->post_title = $validatedData['post_title'];
        $posts->post_description = $validatedData['post_description'];

        if ($request->hasFile('post_file')) {
            $uploadPath = 'upload/files/';
            $file = $request->file('post_file');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move($uploadPath, $filename);
            $posts->post_file = $uploadPath . $filename;
        }

        $posts->meta_category_id = Category::findOrFail($validatedData['meta_category_id']);

        $posts->post_meta_title = $validatedData['post_meta_title'];
        $posts->post_meta_description = $validatedData['post_meta_description'];
        $posts->status = $request->status == true ? '1' : '0';

        $posts->save();
        return redirect(route('posts.index'))->with('message', 'Post Successfully Created');
    }
}
