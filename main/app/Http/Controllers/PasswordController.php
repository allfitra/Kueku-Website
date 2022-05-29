<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class PasswordController extends Controller
{
    public function index() {
        return view('account.password', [
            'title' => 'account',
        ]);  
    }

    public function update(Request $request) {
        $validatedData = $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|max:225|confirmed',
            'password_confirmation' => 'required',
        ]);
    
        if(!Hash::check($request->current_password, auth()->user()->password)){
            throw ValidationException::withMessages([
                'current_password' => 'Your current password does not match with our record'
            ]);
        }
        // @ts-ignore
        auth()->user()->update(['password' => Hash::make($request->password)]);
        return redirect('/account')->with('success', 'Password Berhasil Diperbarui');
    }
}
