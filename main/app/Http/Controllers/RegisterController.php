<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index() {
        return view('register', [
            'title' => 'register'
        ]);
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            'name' => 'required|min:5|max:225',
            'email' => 'required|email:dns|unique:users',
            'contact' => 'required|numeric|digits_between:12,13|unique:users',
            'password' => 'required|min:8|max:225'
        ]);
         

        $validateData['password'] = Hash::make($validateData['password']);
        User::create($validateData);

        return redirect('/login')->with('success', 'Registration Successfull! Please Login');
    }
}
