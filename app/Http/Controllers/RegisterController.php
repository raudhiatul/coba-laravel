<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create() {
        return view('register.index',[
            'title' => 'Register',
            // 'active' => 'register'
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request ->validate([
             'name' => 'required|max:255',
             'username' => 'required|min:3|max:255|unique:users',
             'email' => 'required|email:dns|unique:users',
             'password' => 'required|min:5|max:255'
         ]);

         User::create($validatedData);
         
         // $validatedData['password'] = bcrypt($validatedData['password']);
         $validatedData['password'] = Hash::make($validatedData['password']);

         // $request->session()->flash('success','Registration Successfull! Please Login');
         return redirect('/login')->with('success','Registration Successull! Please Login');
    }
}
