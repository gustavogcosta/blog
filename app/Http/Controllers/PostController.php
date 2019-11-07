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
        $posts = Post::where('id', '>', 1)->paginate(3);
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
        if(strlen($request->title) > 50){
            return redirect()->back()->withInput()->withErrors("Limite excessivo de caracteres no titulo!");
        }    
        $post->title = $request->title;
        if(strlen($request->content) > 255){
            return redirect()->back()->withInput()->withErrors("Limite excessivo de caracteres no conteudo!");
        };
        $post->content = $request->content;
        $post->user = $request->user;
        $post->save();
        return redirect()->route('blog.home');
    }

    public function show()
    {
        $user = Auth::user();
        $posts = Post::where('user', $user->id)->paginate(2);
        return view('blog.post.show', ['posts' => $posts]);
    }

    public function edit(Post $post)
    {
        return view('blog.post.edit', ["post" => $post]);
    }   

    public function update(Request $request, Post $post)
    {
        if(strlen($request->title) > 50){
            return redirect()->back()->withInput()->withErrors("Limite excessivo de caracteres no titulo!");
        }    
        $post->title = $request->title;
        if(strlen($request->content) > 255){
            return redirect()->back()->withInput()->withErrors("Limite excessivo de caracteres no conteudo!");
        };
        $post->content = $request->content;
        $post->user = Auth::user()->id;
        $post->save();
        return redirect()->route('blog.post.show');
        
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('blog.post.show');
    }

    public function formFind(){
        return view('blog.post.find');
    }

    public function find(Request $request){
        $posts = Post::where($request->filtro, 'LIKE', '%'.$request->keyword.'%')->paginate(2);        
        foreach ($posts as $post) {
            $user = User::where('id', $post->user)->first();
            $post->user = $user->name;
        }
        return view('blog.post.result', [
            "posts" => $posts
        ]);
    }
}
