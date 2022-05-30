<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.index', [
            'title' => 'account',
            'user' => User::find(auth()->user()->id)
        ]);
    }

    public function toko(){
        return view('account.toko', [
            'title' => null,
            'user' => User::find(auth()->user()->id)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('account.edit', [
           'title' => 'account',
           'user' => $user 
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = ([
            'name' => 'required|min:5|max:225',
            'provinsi' => 'required|min:3|max:225',
            'kota_kabupaten' => 'required|min:3|max:225',
            'kecamatan' => 'required|min:3|max:225',
            'alamat_lengkap' => 'required|min:5|max:1200'
        ]);

        if($request->contact != $user->contact) {
            $rules['contact'] = 'required|numeric|digits_between:12,13|unique:users';
        }
        // $oldEmail = $user->email;
        $validatedData = $request->validate($rules);

        User::where('id', $user->id)->update($validatedData);

        // $newEmail = User::find($user)->first()->email;
        // if($oldEmail != $newEmail) {
        //     User::find($user->id)->update(['email_verified_at' => null]);
        // }
        
        return redirect('/account')->with('success', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function resend_verify_message() {
        return view('account.emailVerify', [
            'title' => null
        ]);
    }
}
