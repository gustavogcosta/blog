<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        foreach ($posts as $post) {
            $user = User::where('id', $post->user)->first();
            $post->user = $user->name;
        }
        return view('post.list', ['posts' => $posts]);
    }
    
    public function create()
    {
        $users = User::all();
        return view('post.cad', ['users' => $users]);
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user = $request->user;
        $post->save();
        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        $user = User::where('id', $post->user)->first();
        $post->user = $user->name;
        return $post;
    }

    public function edit(Post $post)
    {
        $users = User::all();
        return view('post.att', ["post" => $post, "users" => $users]);
    }   

    public function update(Request $request, Post $post)
    {
        $post->id = $request->id;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user = $request->user;
        $post->save();
        return redirect()->route('posts.index');
        
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
