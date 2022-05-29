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

        if (isset($cart[$product->toko])) {
            if (isset($cart[$product->toko][$id])) {
                $cart[$product->toko][$id]['jumlah']++;
            } else {
                $cart[$product->toko] += [
                    $id => [
                        'nama' => $product->nama,
                        'toko' => $product->toko,
                        'harga' => $product->harga,
                        'gambar' => $product->gambar,
                        'jumlah' => 1
                    ]
                ];
            }
        } else {
            $cart[$product->toko] = [
                $id => [
                    'nama' => $product->nama,
                    'toko' => $product->toko,
                    'harga' => $product->harga,
                    'gambar' => $product->gambar,
                    'jumlah' => 1
                ]
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Barang ditambahkan ke keranjang!');
    }


    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->toko][$request->id])) {
                unset($cart[$request->toko][$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Barang dihapus dari keranjang!');
        }
    }

    public function removeShop(Request $request)
    {
        if ($request->toko) {
            $cart = session()->get('cart');
            if (isset($cart[$request->toko])) {
                unset($cart[$request->toko]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Semua produk dari ' . $request->toko . ' dihapus!');
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
                $cart[$request->toko][$request->id]["jumlah"]++;
            } else if ($request->op === "drop") {
                $cart[$request->toko][$request->id]["jumlah"]--;
            }
            session()->put('cart', $cart);
        }
    }
}
