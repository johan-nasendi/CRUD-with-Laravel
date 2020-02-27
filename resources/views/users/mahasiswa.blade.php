@extends('layout/main')

@section('title', 'Lsit User Global Valley')

@section('container')
            <div class="container">
                <div class="row">
                    <div class="col-10">
                            <h1 class="mt-3"> List User </h1>
                  
               
          
            <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Nim</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
            @foreach($mahasiswa as $mhs)
                <tr>
                <th scope="row">1</th>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->jurusan }}</td>
                <td>{{ $mhs->email}}</td>
                </tr>
                <tr>
                    @endforeach
            </tbody>
            </table>
            </div>
            </div>
            </div>


           <!-- FOOTER -->
           <div class="footer1">
         <footer class="container text-center">
              <p class="float-right"><a href="#">Back to top</a></p>
                <p>&copy;2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
          
         </footer>
         </div>
    @endsection