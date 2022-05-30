@extends('layouts.main')

@section('container')
    <style>
        .p-filter {
            margin-top: 4px;
            margin-bottom: 2px;
            font-size: 14px;
        }

        .btn-brown {
            background-color: #836953;
            color: white;
        }

        .btn-brown:hover {
            background-image: linear-gradient(rgba(0, 0, 0, 0.4) 0 0);
            color: white;
        }

    </style>


    <div class="row">

        <div class="col-md-3 text-dark">
            <p class="fw-bold lead">Filter</p>
            <div class="card shadow">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <p>Kategori</p>
                        <p class="p-filter"><i class="bi bi-chevron-right"></i>Kue Kering</p>
                        <p class="p-filter"><i class="bi bi-chevron-right"></i>Kue Basah</p>
                        <p class="p-filter"><i class="bi bi-chevron-right"></i>Aneka Roti</p>
                    </li>
                    <li class="list-group-item">
                        <p>Lokasi</p>
                        <p class="p-filter"><input class="form-check-input me-1" type="checkbox" value=""
                                aria-label="...">Painan</p>
                        <p class="p-filter"><input class="form-check-input me-1" type="checkbox" value=""
                                aria-label="...">Painan</p>
                        <p class="p-filter"><input class="form-check-input me-1" type="checkbox" value=""
                                aria-label="...">Painan</p>
                    </li>
                    <li class="list-group-item">
                        <p>Rating</p>
                        <p class="p-filter"><input class="form-check-input me-1" type="checkbox" value=""
                                aria-label="..."><i class="bi bi-star-fill" style="color: gold"></i> 4+</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-9">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-3 col-xs-6">
                        <div class="card shadow mb-4 border-radius">
                            <img src="{{ asset('img/' . $product->gambar) }}" class="card-img-top"
                                alt="{{ $product->nama }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->nama }}</h5>
                                <p class="card-text text-success"><small>{{ $product->toko }}</small></p>
                                <p class="card-text"><small>{{ $product->deskripsi }}</small></p>
                                <p class="card-text fw-bold text-end">Rp.
                                    {{ number_format($product->harga, 0, '', '.') }}
                                </p>
                                <a href="{{ route('add_to_cart', $product->id) }}" class="btn btn-sm w-100 btn-brown"><i
                                        class="bi bi-cart-plus"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
