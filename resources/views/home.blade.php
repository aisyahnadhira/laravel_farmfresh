@extends('layout.master')
@section('title','Home | Farm Fresh')

@section('content')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/banner1.png" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="img/banner2.png" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="img/banner3.png" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="img/banner4.png" class="d-block w-100">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>
@endsection
