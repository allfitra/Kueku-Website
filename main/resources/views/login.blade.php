@extends('layouts.main')

@section('container')


<div class="row justify-content-center">
    <div class="col-lg-4">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="container signup-body">
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
                        placeholder="Masukkan Password" name="password" required type="password" value="{{ old('password') }}">
                    @error('password')               
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="text-center mt-3">
                    <button type="submit" class="btn-confirm">LOGIN</button>
                    <small class="d-block text-center mt-3">Not Registered? <a href="/register"
                            class="text-decoration-none">Register Now!</a></small>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
