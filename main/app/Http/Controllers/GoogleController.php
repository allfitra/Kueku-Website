<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Throwable;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class GoogleController extends Controller
{
    public function redirectToGoogle() {
        return Socialite::driver('google')->redirect();
    }

    public function callback() {
        
        try {
            $user = Socialite::driver('google')->stateless()->user();
            
            $finduser = User::where('google_id', $user->getId())->first();

            if($finduser){
                Auth::login(($finduser));
                return redirect('/');
            }else{
                $newuser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => bcrypt('password')
                ]);
                event(new Registered($newuser));
                Auth::login($newuser);
                return redirect()->intended('/');
            }
        } catch (\Throwable $th) {
            dd('gagal');
        }
    }
}
