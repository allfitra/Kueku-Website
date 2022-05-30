@extends('layouts.main')

@section('container')
    <div class="row">

        @foreach ($products as $product)
            <div class="col-md-3 col-xs-6">
                <div class="card">
                    <img src="{{ asset('img/' . $product->gambar) }}" class="card-img-top" alt="{{ $product->nama }} ">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->nama }}</h5>
                        <p class="card-text text-success"><small>{{ $product->toko }}</small></p>
                        <p class="card-text">{{ $product->deskripsi }}</p>
                        <p class="card-text lead fw-bold text-end">Rp. {{ number_format($product->harga, 0, '', '.') }}</p>
                        <a href="{{ route('add_to_cart', $product->id) }}" class="btn w-100 btn-primary"><i
                                class="bi bi-cart-plus"></i> Add To Cart</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
