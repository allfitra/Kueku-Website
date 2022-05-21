@extends('layouts.main')

@section('container')
    <div class="row">
        <div class="col-md-8">
            <h3 class="text-dark pb-3">Keranjang</h3>

            <div class="card shadow-sm">
                <div class="card-body ml-2">
                    <small class="card-text fw-bold"><i class="bi bi-geo-alt-fill text-danger"></i> Toko Kue Putu</small>

                    <div class="row my-3">
                        <div class="col-md-2">
                            <img src="../img/kue-putu.jpg" alt="Kue Putu" width="100">
                        </div>
                        <div class="col-md-10 my-auto">
                            <p>Kue Putu</p>
                            <p class="fw-bold">Rp. 15.000</p>
                        </div>
                    </div>

                    <div class="text-end">
                        <button class="btn"><i class="bi bi-dash-circle lead"></i></button>
                        <span> 1 </span>
                        <button class="btn"><i class="bi bi-plus-circle lead"></i></button>

                        <button class="btn"><i class="bi bi-trash lead"></i></button>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header text-center fw-bold">
                    Ringkasan Pembelian
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <small class="card-text">Total Harga (1 barang)</small>
                        </div>
                        <div class="col-md-5 text-end">
                            <small class="card-text">Rp. 3.900.000</small>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-4">
                        <div class="col-md-7">
                            <p class="card-text">Total Harga</p>
                        </div>
                        <div class="col-md-5 text-end">
                            <p class="card-text">Rp. 3.900.000</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-success w-100"><i class="bi bi-cart-check"></i> Beli</a>
                </div>
            </div>
        </div>
    </div>
@endsection
