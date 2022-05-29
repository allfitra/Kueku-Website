@extends('layouts.main')

@section('container')
    <style>
        .shop-name {
            background-color: #836953;
            color: #fff;
        }

    </style>

    @php
    $total_harga = 0;
    $total_barang = 0;
    @endphp

    <div class="row">
        <div class="col-md-8 text-dark">
            <h2 class="fw-bold">Checkout</h2>
            <p class="lead fw-bold mt-4">Alamat Pengiriman</p>
            <hr>
            <p class="">Fozan</p>
            <p class="">081383378215</p>
            <p class="mt-1">Jalan Batu Amantis No. 24</p>
            <p>Pulogadung, Jakarta Timur, 13210</p>
            <hr>
            <div class="d-inline">
                <button class="btn btn-light shadow-sm">Ganti Alamat Pengiriman</button>
            </div>
            <div class="my-4" style="border-top: 10px solid gray; opacity: 0.5;"></div>

            @if (session('cart'))
                @foreach (session('cart') as $toko => $barang)
                    <div class="card shadow-sm mb-1 shop-name">
                        <div class="card-body">
                            <div class="row">
                                <h5 class="card-title">{{ $toko }}</h5>
                            </div>
                        </div>
                    </div>

                    <ul class="list-group list-group-flush shadow-sm mb-4" nama-toko="{{ $toko }}">
                        @foreach ($barang as $id => $details)
                            <li class="list-group-item" data-id="{{ $id }}">
                                <small class="card-text fw-bold"><i class="bi bi-geo-alt-fill text-danger"></i>
                                    {{ $details['toko'] }}</small>

                                <div class="row my-3">
                                    <div class="col-md-2">
                                        <img src="{{ asset('img/' . $details['gambar']) }}" alt="{{ $details['nama'] }}"
                                            width="100">
                                    </div>
                                    <div class="col-md-10 my-auto">
                                        <p>{{ $details['nama'] }}</p>
                                        <p style="opacity: 0.6;">{{ $details['jumlah'] }} Barang</p>
                                        <p class="fw-bold">Rp.
                                            {{ number_format($details['harga'], 0, '', '.') }}
                                        </p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endforeach
            @endif
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header text-center fw-bold">
                    Ringkasan Pembelian
                </div>
                <div class="card-body">
                    <div class="row">
                        @if (session('cart'))
                            @foreach (session('cart') as $toko => $barang)
                                @foreach ($barang as $id => $details)
                                    @php
                                        $total_harga += $details['harga'] * $details['jumlah'];
                                        $total_barang += $details['jumlah'];
                                    @endphp

                                    <div class="col-md-7">
                                        <small class="card-text">{{ $details['nama'] }} ({{ $details['jumlah'] }}
                                            item)</small>
                                    </div>
                                    <div class="col-md-5 text-end">
                                        <small class="card-text">Rp.
                                            {{ number_format($details['harga'] * $details['jumlah'], 0, '', '.') }}</small>
                                    </div>
                                @endforeach
                            @endforeach
                        @else
                            <div class="col-md-7">
                                <small class="card-text">Total harga (0 barang)</small>
                            </div>
                            <div class="col-md-5 text-end">
                                <small class="card-text">Rp. 0</small>
                            </div>
                        @endif

                    </div>

                    <div class="row mt-2">
                        <div class="col-md-7">
                            <small class="card-text">Biaya Ongkir</small>
                        </div>
                        <div class="col-md-5 text-end">
                            <small class="card-text"><span class="text-success">GRATIS</span></small>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-4">
                        <div class="col-md-7">
                            <p class="card-text">Total Harga</p>
                        </div>
                        <div class="col-md-5 text-end">
                            <p class="card-text">Rp. {{ number_format($total_harga, 0, '', '.') }}</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-success w-100"><i class="bi bi-cart-check"></i> Upload Bukti Pembayaran</a>
                </div>
            </div>
        </div>
    </div>
@endsection
