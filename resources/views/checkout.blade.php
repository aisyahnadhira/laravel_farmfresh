@extends('layout.master')
@section('title','CheckOut | Farm Fresh')

@section('content')
<div class="checkout">
    <br>
    <br>
    <br>
    <div class="row">
        <div class="card">
            <div class="card-body">
            <h2 class="card-title text-center">Data Checkout</h2>
            <hr>
            <br>

            <form action="{{url('/check-out')}}" method="POST">
                @csrf
                <form>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="noTlp">No Telp</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="08">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Alamat</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Jl. Rambutan">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Alamat 2</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, atau rumah">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="kota">Kota</label>
                            <input type="text" class="form-control" id="kota">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="kecamatan">Kecamatan</label>
                            <input type="text" class="form-control" id="kecamatan">
                        </div>
                      <div class="form-group col-md-2">
                        <label for="kodePos">Kode Pos</label>
                        <input type="text" class="form-control" id="kodePos">
                      </div>
                    </div>
                    <button onClick="alert('Pesanan Sedang Di Proses')" type="submit" class="btn btn-dark">Check Out</button><br>
                  </form>
            </div>
        </div>
    </div>
    <br><br><br>
</div>
@endsection
