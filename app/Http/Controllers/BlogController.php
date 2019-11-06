<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index(){
        if(Auth::check()){
            return redirect()->route('post.index');
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

    public function profile(){
        return view('blog.profile');
    }
    
}
