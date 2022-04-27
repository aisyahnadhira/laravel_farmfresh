@extends('layout.master')
@section('title','Input | Farm Fresh')

@section('content')
<div class="input">
    <br><br><br>
    <div class="row mx-lg-5">
        <div class="card h-100">
            <div class="card-body mx-4">
            <h2 class="card-title text-center">Input Product</h2>
            <hr>
            <br>

            <form action="{{url('/tambah')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Barang</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga">
                </div>

                <div class="form-group">
                    <label for="jenis">Jenis</label>
                    <input type="text" class="form-control" id="jenis" name="jenis">
                </div>

                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="text" class="form-control" id="stok" name="stok">
                </div>

                {{-- <div class="form-group">
                    <label for="image">Image</label>
                    <input type="text" class="form-control" id="image" name="image">
                </div> --}}

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>
                <br>

                <button type="submit" class="btn btn-dark mb-2">Tambah</button>
            </form>
            </div>
        </div>
    </div>
    <br><br><br>
</div>
@endsection
