@extends('layouts.main')

@section('container')
    <div class="row">
        <div class="col-md-8">
            <h3 class="text-dark pb-3">Keranjang</h3>

            @php
                $total_harga = 0;
                $total_barang = 0;
            @endphp

            @if (session('cart'))
                @foreach (session('cart') as $id => $details)
                    @php
                        $total_harga += $details['harga'] * $details['jumlah'];
                        $total_barang += $details['jumlah'];
                    @endphp

                    <div class="card shadow-sm mb-2" data-id="{{ $id }}">
                        <div class="card-body ml-2">
                            <small class="card-text fw-bold"><i class="bi bi-geo-alt-fill text-danger"></i>
                                {{ $details['toko'] }}</small>

                            <div class="row my-3">
                                <div class="col-md-2">
                                    <img src="{{ asset('img/' . $details['gambar']) }}" alt="{{ $details['nama'] }}"
                                        width="100">
                                </div>
                                <div class="col-md-10 my-auto">
                                    <p>{{ $details['nama'] }}</p>
                                    <p class="fw-bold">Rp. {{ number_format($details['harga'], 0, '', '.') }}</p>
                                </div>
                            </div>

                            <div class="text-end">
                                <button class="btn"><i class="bi bi-dash-circle lead"></i></button>
                                <span> {{ $details['jumlah'] }} </span>
                                <button class="btn"><i class="bi bi-plus-circle lead"></i></button>

                                <button class="btn"><i class="bi bi-trash lead remove-from-cart"></i></button>
                            </div>

                        </div>
                    </div>
                @endforeach
            @else
                <div class="container">
                    <hr>
                    <h3>Keranjang kamu kosong. Mulai belanja kue sekarang!</h3>
                </div>
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
                            @foreach (session('cart') as $id => $details)
                                <div class="col-md-7">
                                    <small class="card-text">{{ $details['nama'] }} ({{ $details['jumlah'] }}
                                        item)</small>
                                </div>
                                <div class="col-md-5 text-end">
                                    <small class="card-text">Rp.
                                        {{ number_format($details['harga'] * $details['jumlah'], 0, '', '.') }}</small>
                                </div>
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
                    <hr>
                    <div class="row mb-4">
                        <div class="col-md-7">
                            <p class="card-text">Total Harga</p>
                        </div>
                        <div class="col-md-5 text-end">
                            <p class="card-text">Rp. {{ number_format($total_harga, 0, '', '.') }}</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-success w-100"><i class="bi bi-cart-check"></i> Beli</a>
                </div>
            </div>
        </div>
    </div>

    <script></script>
@endsection
