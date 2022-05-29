@extends('account.layouts.main')


@section('container')
    <div class="row justify-content-center mb-5">
        <div class="col-lg-5 bg-light container signup-body py-4 px-5">
            <img src="/img/logo-kueku.png" class="rounded mx-auto d-block text-center mt-0" alt="..."
                style="max-width: 120px">
            <p class="text-center border-bottom fw-bold mt-2">Ubah Data diri</p>
            <div class="alert alert-warning py-1 text-center" role="alert">
                <small>Isi Data Diri Anda dengan Sesuai</small>
            </div>

            <div class="col-md">

                <form action="/account/{{ $user->id }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold"><small>Nama</small></label>
                        <input type="text"
                            class="form-control form-input input-placeholder @error('name') is-invalid @enderror" id="name"
                            name="name" value="{{ old('name', $user->name) }}">
                        @error('name')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="row mt-4">

                        <div class="mb-3 col-md-12">
                            <label for="contact" class="form-label fw-bold"><small>Nomor Telephone</small> </label>
                            <input type="text"
                                class="form-control form-input input-placeholder @error('contact') is-invalid @enderror"
                                id="contact" aria-describedby="emailHelp" name="contact"
                                value="{{ old('contact', $user->contact) }}">
                            @error('contact')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-2 mt-2">
                            <div class="fw-bold">
                                <small>Detail Alamat : </small>
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="validationServer01" class="form-label"><small>Provinsi</small></label>
                            <input type="text" id="disabledTextInput"
                                class="form-control form-input input-placeholder @error('provinsi') is-invalid @enderror"
                                placeholder="Masukkan Provinsi" name="provinsi"
                                value="{{ old('contact', $user->provinsi) }}">
                            @error('provinsi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="validationServer01" class="form-label"><small>Kota / Kabupaten</small></label>
                            <input type="text" id="disabledTextInput"
                                class="form-control form-input input-placeholder @error('kota_kabupaten') is-invalid @enderror"
                                placeholder="Masukkan Kota / Kabupaten" name="kota_kabupaten"
                                value="{{ old('kota_kabupaten', $user->kota_kabupaten) }}">
                            @error('kota_kabupaten')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">

                            <label for="validationServer01" class="form-label"><small>Kecamatan</small></label>
                            <input type="text" id="disabledTextInput"
                                class="form-control form-input input-placeholder @error('kecamatan') is-invalid @enderror"
                                placeholder="Masukkan Kecamatan" name="kecamatan"
                                value="{{ old('kecamatan', $user->kecamatan) }}">
                            @error('kecamatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <div class="mb-3 col-md-12">

                            <label for="validationServer01" class="form-label"><small>Alamat lengkap</small></label>
                            <textarea type="text" id="disabledTextInput" rows="3"
                                class="form-control form-input input-placeholder @error('alamat_lengkap') is-invalid @enderror"
                                placeholder="Masukkan Alamat Lengkap" name="alamat_lengkap"
                                value="">{{ old('alamat_lengkap', $user->alamat_lengkap) }}</textarea>
                            @error('alamat_lengkap')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                    </div>
                    <div class="col text-center">
                        <button type="submit" class="btn btn-primary py-2 mt-2 shadow-none"
                            style="background-color:#836953 "><small>Ubah</small></button>
                    </div>
                </form>
            </div>


        </div>
    </div>
@endsection
