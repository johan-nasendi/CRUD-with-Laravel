@extends('layout/main')

@section('title', 'Edit Data Valley')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <h1>Edit data Valley</h1>
            @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{session('status')}}
            </div>
            @endif

        
                    <form action="/students/{{$students->id}}" method="POST">
                    @method('patch')
                  @csrf

                    <div class="form-group ">
                        <label for="nama">Full Name</label>
                        <input type="text" class="form-control" name="nama" id="nama" aria-describedby="emailHelp" placeholder=" Your Name" value="{{$students->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="nim">Nim</label>
                        <input type="text" class="form-control" name="nim" id="nin" aria-describedby="emailHelp" placeholder="Your Nim" value="{{$students->nim}}">
                    </div>
                    <div class="form-group">
                        <label for="prodi">Prodi</label>
                        <input type="text" class="form-control" name="prodi" id="prodi" aria-describedby="emailHelp" placeholder=" Your email" value="{{$students->prodi}}">

                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" id="nama" aria-describedby="emailHelp" placeholder=" Your Jurusan" value="{{$students->jurusan}}">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" name="kelas" id="kelas" aria-describedby="emailHelp" placeholder="Your Class" value="{{$students->kelas}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="nama" aria-describedby="emailHelp" placeholder=" Your Email" value="{{$students->email}}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="3"> {{$students->alamat}}</textarea>
                    </div>         

                     <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>

@endsection