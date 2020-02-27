@extends('layout/main')

@section('title', 'Profile user')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h1 class="mt-3">Detail Profile User</h1>
            
            <div class="card">
            <div class="card-body">
            <h5 class="card-title">{{ $students->nama }}</h5>
            <h6 class="card-text">{{$students->nim}}</h6>
            <h6 class="card-text">{{$students->prodi}}</h6>
            <h6 class="card-text">{{{ $students->jurusan}}}</h6>
            <h6 class="card-text">{{{ $students->kelas}}}</h6>
            <h6 class="card-text">{{{ $students->email}}}</h6>
            <h6 class="card-text">{{{ $students->alamat}}}</h6>
            
           
           <a href="{{ $students->id}}/edit" class="btn btn-primary">Edit</a>
           
           <form action="{{ $students->id }}" method="post" class="d-inline">
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete it?')" >Delete</button>
             @method('delete')
             @csrf
            </form>
           
            <a href="/users/students" class="card-link">Back</a>
            </div>
        </div>
            </div>
        </div>
    </div>
</div>

@endsection

