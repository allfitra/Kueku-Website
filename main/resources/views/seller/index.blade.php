@extends('seller.layouts.main')

@section('container')
    <div class="row justify-content-center ">
        <div class="col-lg-9 bg-light container signup-body py-4 px-5">
            <img src="/img/logo-kueku.png" class="rounded mx-auto d-block text-center mt-0" alt="..."
                style="max-width: 120px">
            <p class="text-center border-bottom fw-bold mt-2">Dashboard Produk</p>
            @if (session()->has('success'))
                <div class="alert alert-success py-1 text-center" role="alert">
                    <small>{{ session('success') }}</small>
                </div>
            @endif

            <a href="/seller/create" type="button" class="btn btn-primary px-3 py-0 bg-success"><small style=""><i
                        class="bi bi-plus"></i></small><small>&nbsp;&nbsp;Tambah Produk</small> </a>

            <table class="table caption-top text-center">
                <caption>Daftar Produk</caption>
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td>{{ $product->nama }}</td>
                            <td>{{ $product->kategori }}</td>
                            <td class="text-center">
                                <a class="badge bg-info" href="/seller/{{ $product->id }}"><span
                                        data-feather="eye"></span></a>
                                <a class="badge bg-warning" href="/seller/{{ $product->id }}/edit"><span
                                        data-feather="edit"></span></a>
                                <form class="d-inline" action="/seller/{{ $product->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="badge bg-danger border-0" onclick="return confirm('are You Sure?')"><span
                                            data-feather="x-circle"></span></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>

        </div>
    </div>
@endsection
