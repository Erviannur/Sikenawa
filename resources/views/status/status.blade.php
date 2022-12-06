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

<!-- Content -->

<div class="container"> 
    <div class="row pt-150 pb-100" style="justify-content:center;">
        <div class="col-lg-7 pt-60 align-self-top">
            <div class="auth-page">
                <div class="card auth-card shadow-lg" style="height:400px;">
                    <div class="card-body">
                        <div class="px-3">

                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end auth-page-->
        </div><!--end col-->  

        <div class="col-lg-5 pt-60 align-self-top">
            <div class="auth-page">
                <div class="card auth-card shadow-lg" style="height:400px;">
                    <div class="card-body " style="background-color: rgb(120, 242, 120);">
                        <div class="px-3">
                            <h5 class="text-center mb-5">Keterangan</h5>
                            <p class="text-small text-dark px-2"><i class="fa fa-circle fa-solid fa-2xs px-2"> </i><small> Pertolongan pertama pada ternak</small></p>                           
                        </div><!--end /div-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end auth-page-->
        </div><!--end col-->  
    </div><!--end row-->



    
</div>

<!-- End Content -->


@include('layouts.partials.footer')
@endsection