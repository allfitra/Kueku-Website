<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;
use App\Models\User;

class SellerController extends Controller
{
    public function index()
    {
        return view('sellerRegistration', [
            'title' => null
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|min:5|max:225|unique:sellers',
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
}
