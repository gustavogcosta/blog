<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        foreach ($posts as $post) {
            $user = User::where('id', $post->user)->first();
            $post->user = $user->name;
        }
        return view('blog.home', [
            "posts" => $posts
        ]);
    }
    
    public function create()
    {
        return view('blog.post.create');
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user = $request->user;
        $post->save();
        return redirect()->route('blog.home');
    }

    public function show()
    {
        $user = Auth::user();
        $posts = Post::where('user', $user->id)->get();
        return view('blog.post.show', ['posts' => $posts]);
    }

    public function edit(Post $post)
    {
        return view('blog.post.edit', ["post" => $post]);
    }   

    public function update(Request $request, Post $post)
    {
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user = Auth::user()->id;
        $post->save();
        return redirect()->route('blog.post.show');
        
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('blog.home');
    }
}
