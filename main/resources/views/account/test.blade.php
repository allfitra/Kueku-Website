@extends('account.layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-9 bg-light p-5 shadow-lg p-3 mb-5 bg-body rounded">
        <h5 class="border-bottom">Account Information</h5>
        <div class="row g-2 justify-content-between">
            <div class="col-md-3 mt-3 text-center">
                {{-- <img src="/img/kue-putu.jpg" class="rounded mx-auto d-block" alt="..." style="max-width: 150px"> --}}
                <div class="container" style="max-width: 150px"><span style="font-size: 140px"><i class="bi bi-file-person-fill"></i></span></div>
            </div>

            <div class="col-md-8">
                <form>
                  @csrf
                  <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" readonly value="">
                    
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" readonly value="">
                    <div id="emailHelp text-danger" class="form-text">We'll never share your email with anyone else.</div>
                  </div>
                  <div class="mb-3">
                    <label for="contact" class="form-label">Nomor Telephone</label>
                    <input type="email" class="form-control" id="contact" aria-describedby="emailHelp" name="contact" readonly value="">
                    
                  </div>
                    
                  <div class="row">
                    <div class="col-md-4">
                      <div class="px-2 py-1 mb-5 bg-body rounded border border-success border-opacity-25 text-center"><a class="text-decoration-none" href="/account/edit"><small><i class="bi bi-file-person-fill"></i> Ubah Data Diri</small></a></div>
                    </div>
                    <div class="col-md-4">
                      <div class="px-2 py-1 mb-5 bg-body rounded border border-success border-opacity-25 text-center"><a class="text-decoration-none" href=""><small><i class="bi bi-envelope-check"></i> Verifikasi Email</small></a></div>
                    </div>
                    <div class="col-md-4">
                      <div class="px-2 py-1 mb-5 bg-body rounded border border-success border-opacity-25 text-center"><a class="text-decoration-none" href="/account/password"><small><i class="bi bi-exclamation-lg"></i> Ubah Password</small></a></div>
                    </div>
                  </div>
                    
                </form>
            </div>
        </div>
       
    </div>      
</div>





    
@endsection