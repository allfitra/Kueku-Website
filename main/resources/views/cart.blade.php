@extends('layouts.main')

@section('container')
    <style>
        .btn:focus {
            outline: none;
            box-shadow: none;
        }

    </style>

    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="text-dark pb-1">Keranjang</h3>
                </div>
                <div class="col-md-4 text-end my-auto">
                    <button class="btn btn-sm btn-danger remove-all" style="text-decoration: none"><i
                            class="bi bi-trash-fill"></i>
                        <small>Hapus Semua</small></button>
                </div>
            </div>

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
                                @if ($details['jumlah'] === 1)
                                    <button class="btn update-drop" disabled><i class="bi bi-dash-circle lead"></i></button>
                                    <input type="number" value="{{ $details['jumlah'] }}" class="form-control quantity"
                                        hidden />
                                    <span>{{ $details['jumlah'] }}</span>
                                    <button class="btn update-add"><i class="bi bi-plus-circle lead"></i></button>
                                @elseif ($details['jumlah'] === 999)
                                    <button class="btn update-drop"><i class="bi bi-dash-circle lead"></i></button>
                                    <input type="number" value="{{ $details['jumlah'] }}" class="form-control quantity"
                                        hidden />
                                    <span>{{ $details['jumlah'] }}</span>
                                    <button class="btn update-add" disabled><i class="bi bi-plus-circle lead"></i></button>
                                @else
                                    <button class="btn update-drop"><i class="bi bi-dash-circle lead"></i></button>
                                    <input type="number" value="{{ $details['jumlah'] }}" class="form-control quantity"
                                        hidden />
                                    <span>{{ $details['jumlah'] }}</span>
                                    <button class="btn update-add"><i class="bi bi-plus-circle lead"></i></button>
                                @endif

                                <button class="btn remove-from-cart"><i class="bi bi-trash lead"></i></button>
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


    <script>
        // Script untuk Update barang
        $(".update-add").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ route('update_cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.closest("div.card").attr("data-id"),
                    jumlah: ele.closest("div.card").find(".quantity").val(),
                    op: "add"
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });

        $(".update-drop").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ route('update_cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.closest("div.card").attr("data-id"),
                    jumlah: ele.closest("div.card").find(".quantity").val(),
                    op: "drop"
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });


        // Script untuk Remove barang
        $(".remove-from-cart").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("Yakin ingin menghapus produk dari keranjang?")) {
                $.ajax({
                    url: '{{ route('remove_from_cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.closest("div.card").attr("data-id")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });

        $(".remove-all").click(function(e) {
            e.preventDefault();

            if (confirm("Yakin ingin menghapus semua barang di keranjang?")) {
                $.ajax({
                    url: '{{ route('remove_all') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
@endsection
