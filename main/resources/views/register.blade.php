@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="container signup-body">
                <div class="container title">
                    <p>SIGN UP</p>
                </div>
                @if (session()->has('error'))
                    <div class="alert alert-danger text-center py-1" role="alert">
                        <small>{{ session('error') }}</small>
                    </div>
                @endif
                <form action="" method="post">
                    @csrf
                    <div class="container">
                        <label for="validationServer01" class="form-label">Name</label>
                        <input type="text" id="disabledTextInput"
                            class="form-control form-input input-placeholder @error('name') is-invalid @enderror"
                            placeholder="Masukkan Nama" name="name" required value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="container input">
                        <label for="validationServer01" class="form-label">Email</label>
                        <input type="text" id="disabledTextInput"
                            class="form-control form-input input-placeholder @error('email') is-invalid @enderror"
                            placeholder="Masukkan Email" name="email" required value="{{ old('email') }}">

                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="container input">
                        <label for="validationServer01" class="form-label">Password</label>
                        <input id="disabledTextInput" type="password"
                            class="form-control form-input input-placeholder @error('password') is-invalid @enderror"
                            placeholder="Masukkan Password" name="password" required value="{{ old('password') }}">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="container input">
                        <label for="validationServer01" class="form-label">Konfirmasi Password</label>
                        <input id="disabledTextInput" type="password"
                            class="form-control form-input input-placeholder @error('password') is-invalid @enderror"
                            placeholder="Masukkan Password" name="password_confirmation" required
                            value="{{ old('password_confirmation') }}">
                        @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" class="btn-confirm">SIGN UP</button>
                    </div>
                    <small class="d-block text-center text-secondary mt-2">Atau</small>
                    <div class="col-md-12 text-center ">
                        <a class="btn btn-lg btn-google btn-block btn-outline input-name fw-bold mt-0"
                            href="/auth/google"><img src="https://img.icons8.com/color/16/000000/google-logo.png"> Lanjutkan
                            dengan Google</a>
                    </div>

                    <small class="d-block text-center mt-0">Sudah Registrasi? <a href="/login"
                            class="text-decoration-none">Login Sekarang!</a></small>


                </form>
            </div>
        </div>
    </div>
@endsection
