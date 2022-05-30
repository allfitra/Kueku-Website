@extends('seller.layouts.main')

@section('container')
    <div class="row justify-content-center ">
        <div class="col-lg-5 bg-light container signup-body py-4 px-5">
            <a class="badge rounded-pill text-bg-secondary text-decoration-none" href="/seller">Kembali</a>
            <img src="/img/logo-kueku.png" class="rounded mx-auto d-block text-center mt-0" alt="..."
                style="max-width: 120px">
            <p class="text-center border-bottom fw-bold mt-2">Preview Tampilan Produk</p>
            <div class="col-md-5 col-xs-6 mx-auto">
                <div class="card shadow mb-4 border-radius">
                    <img src="{{ asset('storage/' . $product->gambar) }}" class="card-img-top"
                        alt="{{ $product->nama }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->nama }}</h5>
                        <p class="card-text text-success"><small>{{ $product->seller->name }}</small></p>
                        <p class="card-text"><small>{{ $product->deskripsi }}</small></p>
                        <p class="card-text fw-bold text-end">Rp.
                            {{ number_format($product->harga, 0, '', '.') }}
                        </p>
                    </div>
                </div>

            </div>


        </div>
    </div>
@endsection
