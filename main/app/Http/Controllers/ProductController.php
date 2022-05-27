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


    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Barang dihapus dari keranjang!');
        }
    }


    public function removeAll()
    {
        session()->forget('cart');
    }


    public function update(Request $request)
    {
        if ($request->id && $request->jumlah) {
            $cart = session()->get('cart');
            if ($request->op === "add") {
                $cart[$request->id]["jumlah"]++;
            } else if ($request->op === "drop") {
                $cart[$request->id]["jumlah"]--;
            }
            session()->put('cart', $cart);
        }
    }
}
