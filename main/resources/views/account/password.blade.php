@extends('account.layouts.main')

@section('container')
    <div class="row justify-content-center ">
        <div class="col-lg-4 bg-light container signup-body py-4 px-5">
            <img src="/img/logo-kueku.png" class="rounded mx-auto d-block text-center mt-0" alt="..."
                style="max-width: 120px">
            <p class="text-center border-bottom fw-bold mt-2">Ubah Password</p>

            <form action="/account/change_password" method="POST">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="current_password" class="form-label"><small>Password Saat Ini</small></label>
                    <input type="password"
                        class="form-control form-input input-placeholder @error('current_password') is-invalid @enderror"
                        id="old-password" name="current_password" value="">
                    @error('current_password')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label"><small>Password Baru</small></label>
                    <input type="password"
                        class="form-control form-input input-placeholder @error('password') is-invalid @enderror"
                        id="new-password" name="password" value="">
                    @error('password')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="confirm" class="form-label"><small>Konfirmasi Password</small></label>
                    <input type="password"
                        class="form-control form-input input-placeholder @error('password_confirmation') is-invalid @enderror"
                        id="confirm" name="password_confirmation" value="">
                    @error('password_confirmation')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary py-2 mt-2 shadow-none"
                        style="background-color:#836953 "><small>Ubah Password</small></button>
                </div>
            </form>
        </div>
    </div>
@endsection
