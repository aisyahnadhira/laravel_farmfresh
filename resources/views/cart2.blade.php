@extends('layout.master')
@section('title','Cart | Farm Fresh')

@section('content')
<br><br>
<div class="container jumbotron text-center">
    <h1>Total Belanja</h1><hr>
    <br><br>

        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>

                <?php $no=1;?>
                    @forelse($products as $produk)
                        <tr>
                            <?php
                                $harga = ($produk->harga);
                                $jumlah = ($produk->jumlah);
                                $total = $harga * $jumlah;
                            ?>
                                <td>{{$no++}}</td>
                                <td>{{$produk->nama}}</td>
                                <td>{{$produk->harga}}</td>
                                <td>{{$produk->jumlah}}</td>
                                <td>{{$total}}</td>
                        </tr>
                    @empty
                            <div class="alert alert-dark d-inline-block">Keranjang Masih Kosong</div>
                    @endforelse
        </table>
        <a class="btn btn-dark" href="/hapus" role="button">Hapus Semua</a><br>
        <br>
        <a href="/cart" class="previous"><strong><< Kembali</strong></a>
        <a href="/data-check-out" class="previous ml-5"><strong>Next >></strong></a>


</div>

@endsection
