@extends('layout.master')
@section('title','Shop | Farm Fresh')
@section('shop','active')

@section('content')
    <div class="image">
        <img src="img/img1.png" alt="">
    </div>

    <br>
    <div class="mr-5 ml-5 text-center">
        @component('layout.alert')
        @slot('class')
            warning
        @endslot
            <h4>Shop</h4>
        @endcomponent
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 box">
                <div class="row">
                    <div class="col-lg">
                        <img src="img/3.png">
                        <h4>Sayur</h4>
                    </div>

                    <div class="col-lg">
                        <img src="img/4.png">
                        <h4>Buah</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <h1 class="judul">Our Products <i class="fas fa-shopping-basket"></i> </h1>
    <br>

    <div class="container">
        <div class="row justify-content-center text-center">
            @forelse($products as $tugas)
                <div class="col-md-4">
                    <div class="card list-card mt-2 mb-4 mx-3">
                        <img class="card-img-top h-50 d-inline-block" src="{{$tugas->image}}" alt="">
                            <div class="card-body text-dark-xl" style="font-size: 20px">
                            Nama : {{$tugas->nama}} <br>
                            Harga : Rp. {{$tugas->harga}}/Kg<br>
                            Stok: {{$tugas->stok}} Kg<br>
                            <div class="icons">
                                <a href="/cart" title="Cart" class="fas fa-shopping-cart"></a>
                                <a href="/shop" title="Favorite" class="fas fa-heart"></a>
                                <a href="/shop" title="Share" class="fas fa-share"></a>
                            </div>
                            </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-dark d-inline-block">Tidak ada data ...</div>
            @endforelse
        </div>
    </div>

    <nav aria-label="Page navigation example">
        <ul class="pagination pagination-lg justify-content-center">
          <li class="page-item"><a class="page-link" style="color: #666;" href="#">1</a></li>
          <li class="page-item"><a class="page-link" style="color: #666;" href="#">2</a></li>
          <li class="page-item"><a class="page-link" style="color: #666;" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" style="color: #666;" href="#">Next</a>
          </li>
        </ul>
      </nav>
@endsection
