@extends('layout.master')
@section('title','About | Farm Fresh')

@section('content')
    <div class="image">
        <img src="img/img1.png">
    </div>
    <br>
    <div class="row no-gutters position-relative">
        <div class="col-md-6 mb-md-0 p-md-4">
            <img src="img/kebun7.jpg" class="w-100 rounded-lg" >
        </div>
        <div class="col-md-6 position-static p-4 pl-md-0">
            <h3 class="mt-0 text-center">About</h3>
            <br>
            <p>Menyediakan buah dan sayuran yang masih segar , dipetik langsung dari kebunnya.
               Kami memiliki perkebunan sendiri yang di olah oleh para ahli pertanian.
               Dan Menggunakan perawatan berkualitas tinggi.
               Ada banyak jenis sayuran yang siap dipanen setiap hari, seperti wortel, kentang, kangkung, tomat, dsb.
               Dan untuk buah buahan nya memiliki rasa yang manis, seperti semangka, melon, pisang, apel, durian, dsb
            </p>
            <br>
            <p>Farm Fresh menyediakan itu semua dengan harga yang terjangkau dan berkualitas tinggi.
                Penuhi semua kebutuhan mu di Farm Fresh melalui website resmi kami.
                Dapat kan segera buah dan sayuran favoritmu sebelum kehabisan.
                <strong>Happy Shopping Everyone</strong></p>
            <a class="btn btn-dark" href="/shop" role="button">Let's Shop <i class="fas fa-shopping-cart"></i></a>
        </div>
    </div>

    <br>
        <h1 class="judul">Our Gallery <i class="fas fa-images"></i> </h1>
    <br>

    <div class="container">
        <div class="row justify-content-center">
            @forelse($about as $val)
            <div class="col-md-4">
                <div class="card list-card mt-2 mb-4 img-thumbnail">
                    <img src="{{$val}}" class="card-img-top">
                </div>
            </div>
            @empty
                <div class="alert alert-dark d-inline-block">Tidak ada data ...</div>
            @endforelse
        </div>
    </div>
@endsection
