<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('order', [
            'title' => 'order',
            'products' => Product::all()
        ]);
    }


    public function cart()
    {
        return view('cart', [
            'title' => 'cart'
        ]);
    }


    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['jumlah']++;
        } else {
            $cart[$id] = [
                'nama' => $product->nama,
                'toko' => $product->toko,
                'harga' => $product->harga,
                'gambar' => $product->gambar,
                'jumlah' => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Barang ditambahkan ke keranjang!');
    }
}
