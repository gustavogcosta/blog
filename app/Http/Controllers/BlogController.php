<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class BlogController extends Controller
{
    public function index(){
        if(Auth::check()){
            $posts = Post::all();
            foreach ($posts as $post) {
                $user = User::where('id', $post->user)->first();
                $post->user = $user->name;
            }
            return view('blog.index', [
                "posts" => $posts
            ]);
        }else{
            return redirect()->route('blog.login');
        }
    }

    public function formLogin(){
        return view('blog.login');
    }

    public function login(Request $request){
        if(!filter_var($request->email, FILTER_VALIDATE_EMAIL)){
            return redirect()->back()->withInput()->withErrors("Email invalido!");
        }
        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($credential)){
            return redirect()->route('blog.index');
        }

        return redirect()->back()->withInput()->withErrors("Dados não conferem!");
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('blog.index');
    }

    public function formRegister(){
        return view('blog.register');
    }

    public function register(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('blog.index');
    }

    public function profile(){
        return view('blog.profile');
    }

    public function user(){
        return view('blog.user');
    }

    public function userUpdate(Request $request){
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return redirect()->route('blog.index');
    }
    
}
