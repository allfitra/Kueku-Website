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
        $seller_id = Seller::where('user_id', auth()->user()->id)->first()->id;
        return view('seller.index', [
            'title' => null,
            'products' => Product::where('seller_id', $seller_id)->get()
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
        $validatedData = $request->validate([
            'nama' => 'required|min:5|max:225',
            'deskripsi' => 'required',
            'gambar' => 'required|image|file|max:1024',
            'harga' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'kategori' => 'required',
        ]);
        $validatedData['seller_id'] = Seller::where('user_id', auth()->user()->id)->first()->id;
        if($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('post-images');
        }
        Product::create($validatedData);
        return redirect('/seller')->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('seller.show', [
            'title' => null,
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('seller.edit', [
            'title' => null,
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'nama' => 'required|min:5|max:225',
            'deskripsi' => 'required',
            'gambar' => 'image|file|max:1024',
            'harga' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'kategori' => 'required',
        ]);
        if($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('post-images');
        }
        Product::where('id', $product->id)->update($validatedData);
        return redirect('/seller')->with('success', 'Produk berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect('/seller')->with('success', 'Produk berhasil dihapus');
    }
}
