<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function create()
    {
        return view('blog.user.create');
    }

    public function store(Request $request)
    {
        $user = new User;
        if(!filter_var($request->email, FILTER_VALIDATE_EMAIL)){
            return redirect()->back()->withInput()->withErrors("Email invalido!");
        }        
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('blog.home');
    }

    public function edit()
    {
        return view('blog.user.edit');
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        if(!filter_var($request->email, FILTER_VALIDATE_EMAIL)){
            return redirect()->back()->withInput()->withErrors("Email invalido!");
        }        
        $user->email = $request->email;        
        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return redirect()->route('blog.home');
    }
}
