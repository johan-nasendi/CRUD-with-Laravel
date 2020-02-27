@extends('layout/main')

@section('title', 'Students Global Valley')

@section('container')
            <div class="container">
                <div class="row">
                    <div class="col-7">
                            <h1 class="text-center"> List Students</h1> 
                            
                            <a href="/students/create" class="btn btn-primary">Add User</a>
                                <br><br>
                                @if(session('status'))
                                <div class="alert alert-success" role="alert">
                                {{session('status')}}
                                </div>
                                @endif
                            
                                <ul class="list-group">
                                @foreach($students as $mhs)
                                <li class="list-group-item d-flex justify-content-between align-items-center" >
                                {{$mhs->nama}}
                                <a href="/students/{{ $mhs->id}} " class="btn btn-info" class="bagde bagde-info" button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">detail</a>
                            </li>
                                @endforeach
                                </ul>         
                            </div>
                        </div>
                    </div>


           <!-- FOOTER -->
           <div class="footer1">
         <footer class="container text-center">
              <p class="float-right"><a href="#">Back to top</a></p>
                <p>&copy;2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Teams</a></p>
          
         </footer>
         </div>
    @endsection