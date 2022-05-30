<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\Product;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        if(! Seller::where('user_id', auth()->user()->id)->exists()){
            return redirect('/toko')->with('error', 'Anda harus melakukan registrasi toko terlebih dahulu');
        }

        return view('seller.index', [
            'title' => null
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seller.create', [
            'title' => null
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|min:5|max:225|unique:sellers',
            'provinsi' => 'required|min:3|max:225',
            'kota_kabupaten' => 'required|min:3|max:225',
            'kecamatan' => 'required|min:3|max:225',
            'alamat_lengkap' => 'required|min:5|max:1200',
            'contact' => 'required|numeric|digits_between:12,13|unique:sellers',
        ]);
        $validateData['user_id'] = auth()->user()->id;
        $validateData['income'] = 0;

        Seller::create($validateData);

        return redirect('/')->with('success', 'Registrasi berhasil! Silahkan Login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(Seller $seller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit(Seller $seller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seller $seller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seller $seller)
    {
        //
    }
}
