@extends('layouts.app')


@section('content')

<header id="home" class="header-area">
    <div class="navigation fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">   

                    @include('layouts.partials.navbar')
                    
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- navigation -->
</header>
        

    <div class="container-fluid">
        <div class="row pt-200" style="justify-content:center;">
            <div class="col-lg-4 align-self-center">
                <div class="card">
                    <div class="card-body">
                        <div class="px-3">
                            
                            <div class="text-center auth-logo-text">
                                <h4 class="text-muted mb-3">Nomor ID</h4>
                                <p class="text-center">Berikut  adalah ID anda untuk memeriksa <br> Status pengiriman laporan pengaduan <br>
                                    (Harap Screenshot/Tangkap Layar,untuk <br>mengingat ID.)
                                </p>
                                <h1 class="text-center mt-3">A01</h1>  
                                <button class="btn btn-success mt-5">Status Pengaduan</button>
                            </div> <!--end auth-logo-text-->
                            
    
                        </div><!--end /div-->
                    </div><!--end card-body-->
                </div>
            </div><!--end col-->           
        </div><!--end row-->
    </div>

@include('layouts.partials.footer')

@endsection
    