<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
   
    private $toValidate = [
        'title' => 'required|string',
        'image' => 'required|string',
        'body' => 'required|string',
        'author' => 'required|string',
        'slug' => 'required|string'
    ];

    public function index()
    {
        return view('posts.index', ['posts' => Post::all()]);
    }


    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate($this->toValidate);
        Post::create($validated);
        return redirect(route('posts.show', ['post' => Post::all()->last()]));
    }


    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }


    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }


    public function update(Request $request, Post $post)
    {
        $validated = $request->validate($this->toValidate);
        $post->update($validated);
        return redirect(route('posts.show', $post));
    }

    public function destroy(Post $post)
    {
        $post->delete();
        $posts = Post::latest()->get();
        return redirect()->route('posts.index')->with('delete', " You deleted the post with id: $post->id");
    }
}
