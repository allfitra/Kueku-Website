@extends('account.layouts.main')

@section('container')
    <div class="row justify-content-center ">
        <div class="col-lg-4 bg-light container signup-body py-4 px-5">
            <img src="/img/logo-kueku.png" class="rounded mx-auto d-block text-center mt-0" alt="..."
                style="max-width: 120px">
            <p class="text-center border-bottom fw-bold mt-2">Informasi Akun</p>
            @if (session()->has('success'))
                <div class="alert alert-success py-1 text-center" role="alert">
                    <small>{{ session('success') }}</small>
                </div>
            @endif

            <div class="mb-3 ">
                <label for="name" class="form-label "><small>Nama</small></label>
                <input type="text" class="form-control form-input input-placeholder" id="name" name="name" readonly
                    value="{{ $user->name }}">

            </div>
            <div class="mb-3">
                <label for="email" class="form-label"><small>Email</small></label>
                <input type="email" class="form-control form-input input-placeholder" id="email"
                    aria-describedby="emailHelp" name="email" readonly value="{{ $user->email }}">
                @if (!$user->email_verified_at)
                    <div id="emailHelp " class="form-text text-danger">Email Anda Belum Terverifikasi, <a
                            class="text-decoration-none" href="/resend_verify_message">Verifikasi Sekarang</a></div>
                @else
                    <div id="emailHelp text-danger" class="form-text text-success">Email Anda Sudah
                        Terverifikasi</div>
                @endif
            </div>
            <div class="mb-3">
                <label for="contact" class="form-label"><small>Nomor Telephone</small></label>
                <input type="email" class="form-control form-input input-placeholder" id="contact"
                    aria-describedby="emailHelp" name="contact" readonly value="{{ $user->contact }}">

            </div>

            <div class="row">
                <div class="col-md-6">
                    <a class="text-decoration-none" href="/account/{{ $user->id }}/edit">
                        <div class="px-1 py-1 mb-2 bg-body rounded border border-success border-opacity-25 text-center">
                            <small><i class="bi bi-file-person-fill"></i> Lengkapi Profil</small>
                        </div>
                    </a>
                </div>

                @if (!$user->google_id)
                    <div class="col-md-6">
                        <a class="text-decoration-none" href="/account/change_password">
                            <div class="px-1 py-1 mb-2 bg-body rounded border border-success border-opacity-25 text-center">
                                <small><i class="bi bi-exclamation-lg"></i> Ubah Password</small>
                            </div>
                        </a>
                    </div>
                @else
                    <div class="col-md-6">
                        <div
                            class="text-secondary px-1 py-1 mb-2 bg-body rounded border border-success border-opacity-25 text-center">
                            <small><i class="bi bi-exclamation-lg"></i> Ubah Password</small>
                        </div>
                    </div>
                @endif

            </div>

        </div>
    </div>
@endsection
