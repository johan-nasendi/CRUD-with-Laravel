
@extends('layout/main')

@section('title', 'Contact Global Valley')

@section('container')
     <div class="jumbotron">
         <div class="container">
        <h1 class="display-3 text-center">Contact Global Valley</h1>
            <p class="lead text-center">Global Valley development technology that develops mobile websites and Android</p>
                <hr class="my-4">
                 </div>
                 </div>
        
         <div class="container1">
            <div class="row">
            </div>
                <div class="col-sm-12 text-center">
                <p><i class='fas fa-map-marker-alt' style='font-size:36px'></i> Jl.Bonto-Bulaeng No.79 RT.49 Kec.Balikpapan Tengan-Sumber Rejo Kalimantan Timur</p>
                 </div>
                 <div class="col-sm-9 text-center">
                 <p><i class='fas fa-phone' style='font-size:36px'></i> +62 813 4284 3830</p>   
                 </div>
                 <div class="col-sm-9 text-center">
                 <p><i class='fas fa-envelope' style='font-size:36px'></i> johannasendi@gmail.co.id </p>   
                 </div>
                <div class="col-sm-7">
                    <img src="{{ ('/assest/img/peta.png') }}">
                </div>
            </div>
        </div>

         <!-- FOOTER -->
         <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
                <p>&copy; 2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
         </footer>
    @endsection
