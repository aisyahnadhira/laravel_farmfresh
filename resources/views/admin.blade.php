@extends('layout.master')
@section('title','Admin | Farm Fresh')

@section('content')
<div class="login">
    <br><br><br>
    <div class="row mx-lg-5">
        <div class="card h-100">
            <div class="card-body mx-4">
            <h2 class="card-title text-center">Login Admin</h2>
            <hr>
            <br>

            <form action="{{url('/login-data')}}" method="POST">
                @csrf
                <div class="form-group">
                <label for="idadmin">Id Admin</label>
                <input type="text" class="form-control @error('idadmin') is-invalid @enderror" id="idadmin" name="idadmin" value="{{old('iadadmin')}}">
                @error('idadmin')
                    <div class="text-danger">{{$message}}</div>
                @enderror
                </div>

                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}">
                @error('name')
                    <div class="text-danger">{{$message}}</div>
                @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}">
                @error('email')
                    <div class="text-danger">{{$message}}</div>
                @enderror
                </div>

                {{-- <div class="form-group">
                    <label for="password">Password</label>
                    <label for="inputPassword2" class="sr-only">Password</label>
                    <input type="password" class="form-control" id="inputPassword2">
                </div> --}}
                <button type="submit" class="btn btn-dark mb-2">Login</button>
            </form>
            </div>
        </div>
    </div>
    <br><br><br>
</div>
@endsection
