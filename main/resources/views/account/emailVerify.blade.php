@extends('account.layouts.main')

@section('container')
    <div class="row justify-content-center ">
        <div class="col-lg-6 bg-light container signup-body py-4 px-5">
            <img src="/img/logo-kueku.png" class="rounded mx-auto d-block text-center mt-0" alt="..."
                style="max-width: 120px">
            <p class="text-center border-bottom fw-bold mt-2">Verifikasi Alamat Email Anda</p>
            @if (session()->has('success'))
                <div class="alert alert-success py-1 text-center mt-1" role="alert">
                    <small>{{ session('success') }}</small>
                </div>
            @endif
            <p class="text-secondary text-center"><small>Klik tombol di bawah ini jika masih belum medapatkan pesan
                    verifikasi di email Anda!</small></p>
            @if (auth()->user()->email_verified_at == null)
                <form action="/email/verification-notification" method="post">
                    @csrf
                    <button type="submit"
                        class="btn form-control shadow-none p-3 bg-success text-center text-white rounded mb-3 fw-bold text-center">
                        <i class="bi bi-envelope-check border-none"></i>&nbsp;&nbsp;&nbsp;Verifikasi
                        Email Anda
                    </button>
                </form>
            @else
                <button type="submit"
                    class="btn form-control shadow-none p-3 bg-secondary bg-opacity-75 text-center text-white rounded mb-3 fw-bold text-center">
                    <i class="bi bi-envelope-check border-none"></i>&nbsp;&nbsp;&nbsp;Anda Telah Terverifikasi
                </button>
            @endif
        </div>
    </div>
@endsection
