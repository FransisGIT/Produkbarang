@extends('layout.templatetable')
@section('page-title')
    Tambah Produk
@endsection
@section('table')
    <div class="container">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/simpanproduk" method="post">
            @csrf
            <div class="modal-body">
                Nama:
                <input type="text" name="name" id="" class="form-control">
                deskripsi:
                <input type="text" name="description" id="" class="form-control">
                harga:
                <input type="text" name="price" id="" class="form-control">
                kategori:
                <input type="text" name="category_id" id="" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit!</button>

            </div>

        </form>
    @endsection
