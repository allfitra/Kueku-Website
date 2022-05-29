@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class=" signup-body p-5">
                <div class=" title">
                    <p>Registrasi Toko Kueku</p>
                </div>
                <form action="/seller_register" method="post">
                    @csrf
                    <div class="">
                        <label for="validationServer01 " class="form-label fw-bold">Nama Toko</label>
                        <input type="text" id="disabledTextInput"
                            class="form-control form-input input-placeholder @error('name') is-invalid @enderror"
                            placeholder="Masukkan Nama Toko" name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12 mb-2">
                            <div class="fw-bold">
                                Detail Alamat :
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="">
                                <label for="validationServer01" class="form-label">Provinsi</label>
                                <input type="text" id="disabledTextInput"
                                    class="form-control form-input input-placeholder @error('provinsi') is-invalid @enderror"
                                    placeholder="Masukkan Provinsi" name="provinsi" value="{{ old('provinsi') }}">
                                @error('provinsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="">
                                <label for="validationServer01" class="form-label">Kota / Kabupaten</label>
                                <input type="text" id="disabledTextInput"
                                    class="form-control form-input input-placeholder @error('kota_kabupaten') is-invalid @enderror"
                                    placeholder="Masukkan Kota / Kabupaten" name="kota_kabupaten"
                                    value="{{ old('kota_kabupaten') }}">
                                @error('kota_kabupaten')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="">
                                <label for="validationServer01" class="form-label">Kecamatan</label>
                                <input type="text" id="disabledTextInput"
                                    class="form-control form-input input-placeholder @error('kecamatan') is-invalid @enderror"
                                    placeholder="Masukkan Kecamatan" name="kecamatan" value="{{ old('kecamatan') }}">
                                @error('kecamatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="">
                                <label for="validationServer01" class="form-label">Alamat lengkap</label>
                                <textarea type="text" id="disabledTextInput" rows="3"
                                    class="form-control form-input input-placeholder @error('alamat_lengkap') is-invalid @enderror"
                                    placeholder="Masukkan Alamat Lengkap" name="alamat_lengkap"
                                    value="">{{ old('alamat_lengkap') }}</textarea>
                                @error('alamat_lengkap')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class=" input mt-4">
                        <label for="validationServer01" class="form-label fw-bold">Nomor Telephone</label>
                        <input type="text" id="disabledTextInput"
                            class="form-control form-input input-placeholder @error('contact') is-invalid @enderror"
                            placeholder="Masukkan No. HP / WA" name="contact" value="{{ old('contact') }}">
                        @error('contact')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="text-center mt-3">
                        <button type="submit" class="btn-confirm">Submit</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
@endsection
