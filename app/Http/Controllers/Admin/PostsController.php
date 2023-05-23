<?php

namespace App\Http\Controllers\Admin;

use App\Models\Posts;
use App\Models\PostImages;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\PostFormRequest;

class PostsController extends Controller
{
    public function index()
    {

        return view('pages.admin.posts.index');
    }

    public function create()
    {
        return view('pages.admin.posts.create');
    }

    public function store(PostFormRequest $request)
    {
        $validatedData = $request->validated();
        $posts = new Posts;

        $posts = $posts->create([
            'title' => $validatedData['title'],
            'slug' => Str::slug($validatedData['slug']),
            'category' => $validatedData['category'],
            'post_description' => $validatedData['post_description'],
            'contact_number' => $validatedData['contact_number'],
            'contact_email' => $validatedData['contact_email'],
            'status' => $validatedData['post_status'],
            'pricing' => $validatedData['pricing'],
            'conditions' => $request->status == true ? '0' : '1',
            'username' => Auth::user()->id
        ]);


        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/posts/images/';

            $i = 0;
            foreach ($request->file('image') as $imageFile) {
                $extension = $imageFile->getClientOriginalExtension();
                $filename = time() . $i++ . '.' . $extension;
                $imageFile->move($uploadPath, $filename);
                $finalImagePathName = $uploadPath .  $filename;

                $posts->postImages()->create([
                    'posts_id' => $posts->id,
                    'image' => $finalImagePathName,
                ]);
            }
        }

        if ($request->hasFile('video')) {
            $uploadPath = 'uploads/posts/video/';

            $file = $request->file('video');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move($uploadPath, $filename);
            $finalVideoPath = $uploadPath .  $filename;

            $posts->postDemoVideo()->create([
                'posts_id' => $posts->id,
                'video' => $finalVideoPath,
            ]);
        }

        if ($request->hasFile('document')) {
            $uploadPath = 'uploads/posts/document/';

            $i = 0;
            foreach ($request->file('document') as $imageFile) {
                $extension = $imageFile->getClientOriginalExtension();
                $filename = time() . $i++ . '.' . $extension;
                $imageFile->move($uploadPath, $filename);
                $finalDocumentPath = $uploadPath .  $filename;

                $posts->postDocument()->create([
                    'posts_id' => $posts->id,
                    'document' => $finalDocumentPath,
                ]);
            }
        }

        return redirect(route('posts.index'))->with('message', 'You have been successfully created post');
    }

    public function edit(Posts $post)
    {
        return view('pages.admin.posts.edit', compact('post'));
    }

    public function destroyImage(int $posts_image_id)
    {
        $posts_image = PostImages::findOrFail($posts_image_id);
        if (File::exists($posts_image->image)) {
            File::delete($posts_image->image);
        }

        $posts_image->delete();
        return redirect()->back()->with('message', 'Image has been Removed');
    }

    public function update(PostFormRequest $request, int $posts)
    {
        $validatedData = $request->validated();
        $posts = Posts::findOrFail($posts)->where('id', $posts)->first();

        $posts = $posts->update([
            'title' => $validatedData['title'],
            'slug' => Str::slug($validatedData['slug']),
            'category' => $validatedData['category'],
            'post_description' => $validatedData['post_description'],
            'contact_number' => $validatedData['contact_number'],
            'contact_email' => $validatedData['contact_email'],
            'status' => $request->status == true ? '1' : '0',
            'pricing' => $validatedData['pricing'],
            'conditions' => $request->status == true ? '1' : '0',
        ]);


        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/posts/images/';

            $i = 0;
            foreach ($request->file('image') as $imageFile) {

                if (File::exists($uploadPath)) {
                    File::delete($uploadPath);
                }

                $extension = $imageFile->getClientOriginalExtension();
                $filename = time() . $i++ . '.' . $extension;
                $imageFile->move($uploadPath, $filename);
                $finalImagePathName = $uploadPath .  $filename;

                $posts->postImages()->create([
                    'posts_id' => $posts->id,
                    'image' => $finalImagePathName,
                ]);
            }
        }

        if ($request->hasFile('video')) {
            $uploadPath = 'uploads/posts/video/';

            $file = $request->file('video');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move($uploadPath, $filename);
            $finalVideoPath = $uploadPath .  $filename;

            $posts->postDemoVideo()->update([
                'posts_id' => $posts->id,
                'video' => $finalVideoPath,
            ]);
        }

        if ($request->hasFile('document')) {
            $uploadPath = 'uploads/posts/document/';

            $i = 0;
            foreach ($request->file('document') as $imageFile) {
                $extension = $imageFile->getClientOriginalExtension();
                $filename = time() . $i++ . '.' . $extension;
                $imageFile->move($uploadPath, $filename);
                $finalDocumentPath = $uploadPath .  $filename;

                $posts->postDocument()->update([
                    'posts_id' => $posts->id,
                    'document' => $finalDocumentPath,
                ]);
            }
        }

        return redirect(route('posts.index'))->with('message', 'You have been successfully updated post');
    }

    public function deletepost(int $posts_id)
    {
        $product = Posts::findOrFail($posts_id);
        if ($product->productImages) {
            foreach ($product->productImages as $image) {
                if (File::exists($image->image)) {
                    File::delete($image->image);
                }
            }
        }
        $product->delete();
        return redirect(route('posts.index'))->with('message', 'Posts Has Been Deleted');
    }

    public function single_post(Posts $posts)
    {
        return view('pages.admin.posts.single_page', compact('posts'));
    }
}
