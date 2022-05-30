@extends('seller.layouts.main')

@section('container')
    <div class="row justify-content-center ">
        <div class="col-lg-5 bg-light container signup-body py-4 px-5">
            <a class="badge rounded-pill text-bg-secondary text-decoration-none" href="/seller">Kembali</a>
            <img src="/img/logo-kueku.png" class="rounded mx-auto d-block text-center mt-0" alt="..."
                style="max-width: 120px">
            <p class="text-center border-bottom fw-bold mt-2">Ubah Produk</p>
            @if (session()->has('success'))
                <div class="alert alert-success py-1 text-center" role="alert">
                    <small>{{ session('success') }}</small>
                </div>
            @endif
            <form action="/seller/{{ $product->id }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold"><small>Nama Produk</small></label>
                    <input type="text" class="form-control form-input input-placeholder @error('nama') is-invalid @enderror"
                        id="name" name="nama" value="{{ old('nama', $product->nama) }}"
                        placeholder="Masukkan Nama Produk">
                    @error('nama')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold"><small>Deskripsi Produk</small></label>
                    <input type="text"
                        class="form-control form-input input-placeholder @error('deskripsi') is-invalid @enderror" id="name"
                        name="deskripsi" value="{{ old('deskripsi', $product->deskripsi) }}"
                        placeholder="Masukkan Deskripsi Produk">
                    @error('deskripsi')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label for="name" class="form-label fw-bold"><small>Harga</small></label>
                        <input type="text"
                            class="form-control form-input input-placeholder @error('harga') is-invalid @enderror" id="name"
                            name="harga" value="{{ old('harga', $product->harga) }}" placeholder="Harga Produk">
                        @error('harga')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-4">
                        <label for="name" class="form-label fw-bold"><small>Kategori</small></label>
                        <select
                            class="form-control form-input form-select input-placeholder @error('kategori') is-invalid @enderror"
                            aria-label="Default select example" name="kategori">
                            <option value="Kue basah">Kue Basah</option>
                            <option value="Kue kering">Kue Kering</option>
                            <option value="Aneka Roti">Aneka Roti</option>
                        </select>
                        @error('kategori')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-4">
                        <label for="name" class="form-label fw-bold"><small>Jumlah</small></label>
                        <input type="text"
                            class="form-control form-input input-placeholder @error('jumlah') is-invalid @enderror"
                            id="name" name="jumlah" value="{{ old('jumlah', $product->jumlah) }}"
                            placeholder="Jumlah Produk">
                        @error('jumlah')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label fw-bold"><small>Foto Produk</small></label>
                    <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="inputGroupFile02"
                        name="gambar">
                    @error('gambar')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col text-center">
                    <button type="submit" class="btn btn-primary py-2 mt-2 shadow-none"
                        style="background-color:#836953 "><small>Ubah</small></button>
                </div>
            </form>
        </div>
    </div>
@endsection
