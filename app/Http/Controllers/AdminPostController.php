<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminPostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.show_posts', compact('posts'));
    }

    public function create()
    {
        return view('admin.post.add-post');
    }

    public function store(PostRequest $request)
    {
        $image = $request->image;
        $imagePath = Storage::put('public/image', $image);

        $post = new Post;
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->image = $imagePath;
        $post->excerpt = $request->excerpt;
        $post->main_content = $request->main_content;
        $post->is_published = $request->is_published;

        $post->save();

        return redirect()->route('show-posts')->with('success', 'Новий пост збережено');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.post.edit_post', compact('post',));
    }

    public function update($id, PostRequest $request)
    {
        $post = Post::find($id);

        if ($request->image) {
            $image = $request->image;
            $imagePath = Storage::put("/public/image", $image);
            $post->image = $imagePath;
        }

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->excerpt = $request->excerpt;
        $post->main_content = $request->main_content;
        $post->is_published = $request->is_published;

        $post->save();

        return redirect()->route('show-posts')->with('success', 'Зміни збережені');
    }

    public function delete($id)
    {
        Post::find($id)->delete();
        return back();
    }
}
