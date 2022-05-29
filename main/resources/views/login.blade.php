@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="container signup-body">
                @if (session()->has('success'))
                    <div class="alert alert-success text-center py-1" role="alert">
                        <small>{{ session('success') }}</small>

                    </div>
                @endif
                @if (session()->has('loginError'))
                    <div class="alert alert-danger text-center py-1" role="alert">
                        <small>{{ session('loginError') }}</small>
                    </div>
                @endif
                <div class="container title">
                    <p>LOGIN</p>
                </div>
                <form action="/login" method="post">
                    @csrf
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
                        <input type="password" id="disabledTextInput"
                            class="form-control form-input input-placeholder @error('password') is-invalid @enderror"
                            placeholder="Masukkan Password" name="password" required type="password"
                            value="{{ old('password') }}">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" class="btn-confirm">LOGIN</button>
                    </div>
                    <small class="d-block text-center text-secondary mt-2">Atau</small>
                    <div class="col-md-12 text-center ">
                        <a class="btn btn-lg btn-google btn-block btn-outline input-name fw-bold mt-0"
                            href="/auth/google"><img src="https://img.icons8.com/color/16/000000/google-logo.png"> Lanjutkan
                            dengan Google</a>
                    </div>
                    <small class="d-block text-center mt-0">Belum Registrasi? <a href="/register"
                            class="text-decoration-none">Registrasi Seakrang!</a></small>
                </form>
            </div>
        </div>
    </div>
@endsection
