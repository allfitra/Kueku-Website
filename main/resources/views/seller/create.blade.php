@extends('seller.layouts.main')

@section('container')
    <div class="row justify-content-center ">
        <div class="col-lg-5 bg-light container signup-body py-4 px-5">
            <img src="/img/logo-kueku.png" class="rounded mx-auto d-block text-center mt-0" alt="..."
                style="max-width: 120px">
            <p class="text-center border-bottom fw-bold mt-2">Tambah Produk</p>
            @if (session()->has('success'))
                <div class="alert alert-success py-1 text-center" role="alert">
                    <small>{{ session('success') }}</small>
                </div>
            @endif
            <form action="/" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold"><small>Nama Produk</small></label>
                    <input type="text" class="form-control form-input input-placeholder @error('name') is-invalid @enderror"
                        id="name" name="name" value="{{ old('name') }}">
                    @error('name')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold"><small>Deskripsi Produk</small></label>
                    <input type="text" class="form-control form-input input-placeholder @error('name') is-invalid @enderror"
                        id="name" name="name" value="{{ old('name') }}">
                    @error('name')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label for="name" class="form-label fw-bold"><small>Harga</small></label>
                        <input type="text"
                            class="form-control form-input input-placeholder @error('name') is-invalid @enderror" id="name"
                            name="name" value="{{ old('name') }}">
                        @error('name')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-4">
                        <label for="name" class="form-label fw-bold"><small>Kategori</small></label>
                        <input type="text"
                            class="form-control form-input input-placeholder @error('name') is-invalid @enderror" id="name"
                            name="name" value="{{ old('name') }}">
                        @error('name')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-4">
                        <label for="name" class="form-label fw-bold"><small>Jumlah</small></label>
                        <input type="text"
                            class="form-control form-input input-placeholder @error('name') is-invalid @enderror" id="name"
                            name="name" value="{{ old('name') }}">
                        @error('name')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="input-group mb-3 mt-3">
                    <input type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Foto Product</label>
                </div>






                <div class="col text-center">
                    <button type="submit" class="btn btn-primary py-2 mt-2 shadow-none"
                        style="background-color:#836953 "><small>Ubah</small></button>
                </div>
            </form>
        </div>
    </div>
@endsection
