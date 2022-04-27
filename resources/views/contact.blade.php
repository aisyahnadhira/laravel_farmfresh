@extends('layout.master')
@section('title','Contact | Farm Fresh')

@section('content')
<div class="image">
    <img src="img/img1.png">
</div>
<br>
<div class="mr-5 ml-5 text-center">
    @component('layout.alert')
    @slot('class')
        warning
    @endslot
        <h4>Contact Us</h4>
    @endcomponent
</div>
<br>

<div class="row row-cols-1 row-cols-md-3 mx-5 text-center">
    <div class="col mb-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title"><i class="fas fa-user"></i>  Name</h5>
          <p class="card-text">Aisyah Nadhira Salma Maritza <br> 2031710010</p>

        </div>
      </div>
    </div>

    <div class="col mb-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title"><i class="fas fa-university"></i> University</h5>
          <p class="card-text">Politeknik Negeri Malang <br> Manajement Informatika 2B </p>

        </div>
      </div>
    </div>

    <div class="col mb-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title"><i class="fas fa-tasks"></i> Task</h5>
          <p class="card-text">Tugas Besar Pemrograman Web Lanjut</p>
        </div>
      </div>
    </div>
    </div>
@endsection
