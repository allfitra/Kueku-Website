@extends('layouts.main')

@section('container')
    
<div class="row justify-content-center">
    <div class="col-lg-4">
        <div class="container signup-body">
            <div class="container title">
                <p>SIGN UP</p>
            </div>
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
                    <label for="validationServer01" class="form-label">No. HP / WA</label>
                    <input type="text" id="disabledTextInput"
                        class="form-control form-input input-placeholder @error('contact') is-invalid @enderror"
                        placeholder="Masukkan No. HP / WA" name="contact" required value="{{ old('contact') }}">
                    @error('contact')               
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="container input">
                    <label for="validationServer01" class="form-label">Password</label>
                    <input id="disabledTextInput" type="password"
                        class="form-control form-input input-placeholder @error('password') is-invalid @enderror"
                        placeholder="Masukkan Password" name="password" required  value="{{ old('password') }}">
                    @error('password')               
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="text-center mt-3">
                    <button type="submit" class="btn-confirm">SIGN UP</button>
                    <small class="d-block text-center mt-2">Already Registered? <a href="/login"
                            class="text-decoration-none">Login Now!</a></small>
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection







    