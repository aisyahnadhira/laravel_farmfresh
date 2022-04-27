@extends('layout.master')
@section('title','Cart | Farm Fresh')

@section('content')

<div class="input">
    <br><br><br>
    <div class="row mx-lg-5">
        <div class="card h-100">
            <div class="card-body mx-4">
            <h2 class="card-title text-center">Keranjang Belanja</h2>
            <hr>
            <br>

            <form action="{{url('/tambah-cart')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Barang</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>

                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah">
                </div>
                <br>
                <button type="submit" class="btn btn-dark mb-2">Tambah</button>
            </form>
            <br>
            <a href="/shop" class="next"><strong><< Shop Back</strong></a>
            <a href="/cart2" class="next ml-5"><strong>Daftar Belanja >></strong></a>
            </div>

        </div>
    </div>
    <br><br><br>
</div>
@endsection
