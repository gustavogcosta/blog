<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {

    }

    public function create()
    {
        //
    }

    public function store()
    {
    }

    public function show($id)
    {
        $user = User::where('id', $id)->first();
        if($user){
            echo "<h1>Usuário {$user->name}</h1>";
            echo "<p>Email : {$user->email}</p>";
            echo "<h1>Posts</h1>";
            $posts = $user->posts;
            if($posts){
                foreach ($posts as $post) {
                    echo "<li>{$post->title}</li>";
                }
            }
        }else{
            echo "<h1>Usuário não encontrado</h1>";
        }
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
