@extends('account.layouts.main')

@section('container')
    {{-- @dd($user->seller()->first()); --}}
    {{-- @dd($user->seller->id) --}}
    @if (!isset($user->seller->id))
        <div class="row justify-content-center ">
            <div class="col-lg-6 bg-light container signup-body py-4 px-5">
                <img src="/img/logo-kueku.png" class="rounded mx-auto d-block text-center mt-0" alt="..."
                    style="max-width: 120px">
                <p class="text-center border-bottom fw-bold mt-2">Registrasi Toko Kue Anda</p>
                @if (session()->has('success'))
                    <div class="alert alert-success py-1 text-center mt-1" role="alert">
                        <small>{{ session('success') }}</small>
                    </div>
                @endif
                @if (session()->has('success'))
                    <div class="alert alert-danger py-1 text-center mt-1" role="alert">
                        <small>{{ session('error') }}</small>
                    </div>
                @endif
                <p class="text-secondary text-center"><small>Klik tombol di bawah ini untuk melakukan registrasi toko kue
                        anda</small></p>

                <a type="button" href="/seller_register"
                    class="btn form-control shadow-none p-3 bg-success text-center text-white rounded mb-3 fw-bold text-center">
                    <i class="bi bi-shop"></i>&nbsp;&nbsp;&nbsp;Registrasi Toko
                </a>


            </div>
        </div>
    @else
        <div class="row justify-content-center ">
            <div class="col-lg-6 bg-light container signup-body py-4 px-5">
                <img src="/img/logo-kueku.png" class="rounded mx-auto d-block text-center mt-0" alt="..."
                    style="max-width: 120px">
                <p class="text-center border-bottom fw-bold mt-2">Masuk Ke Toko Saya</p>
                @if (session()->has('success'))
                    <div class="alert alert-success py-1 text-center mt-1" role="alert">
                        <small>{{ session('success') }}</small>
                    </div>
                @endif
                <p class="text-secondary text-center"><small>Klik tombol di bawah ini untuk masuk ke dashboard toko</small>
                </p>
                <a type="button" href="/seller"
                    class="btn form-control shadow-none p-3 bg-success text-center text-white rounded mb-3 fw-bold text-center">
                    <i class="bi bi-shop"></i>&nbsp;&nbsp;&nbsp;Masuk ke dashboard toko
                </a>
            </div>
        </div>
    @endif
@endsection
