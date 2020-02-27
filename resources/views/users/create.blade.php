@extends('layout/main')

@section('title', 'Students Global Valley')

@section('container')
    
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <h1 class="mt-3"> Add User</h1>

            <form method="POST"action="/students" id="id01">
            {{ csrf_field() }}
            
            <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control @error ('nama') is-invalid @enderror"  id="nama" placeholder="Your Name" name="nama" value="{{ old('nama') }}">
                        @error ('nama') <div class="invalid-feedback">{{$message}}
                 </div> 
                 @enderror
                </div>
               
                <div class="form-group">
                    <label for="nim">Nim</label>
                    <input type="text" class="form-control  @error ('nim') is-invalid @enderror"  id="nim" placeholder="Your Nim" name="nim"  value="{{ old('nim') }}">
                    @error ('nim') <div class="invalid-feedback">{{$message}}
                </div>  @enderror
                </div>

                <div class="form-group">
                    <label for="prodi">Prodi / Fakultas</label>
                    <input type="text" class="form-control"  id="prodi" placeholder="Your faculty" name="prodi" value="{{ old('prodi') }}" >
                </div>
                
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control"  id="jurusan" placeholder="Your majors" name="jurusan" value="{{ old('jurusan') }}" >
                </div>

                <div class="form-group">
                    <label for="kelas">kelas</label>
                    <input type="text" class="form-control" id="kelas" placeholder="Your class"  name="kelas"  value="{{ old('kelas') }}">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Your Email"  name="email"  value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" placeholder="Your Address"  name="alamat" rows="3"  value="{{ old('alamat') }}"></textarea>
                </div>

            <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Add Data</button>
            <a href="http://127.0.0.1:8000/users/students"class="btn btn-danger">Cloose</a>
        </div>
           
                </form>
        </div>
    </div>
</div>


@endsection