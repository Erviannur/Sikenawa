@extends('layouts.app')

@section('content')
 
@include('layouts.partials.navbar')

<!-- Log In page -->

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
        <div class="row pt-100" style="justify-content:center;">
            <div class="col-lg-4 align-self-center">
                <div class="auth-page">
                    <div class="card auth-card shadow-lg">
                        <div class="card-body">
                            <div class="px-3">
                                
                                <div class="text-center auth-logo-text">
                                    <p class="text-muted mb-0">Masukan ID</p>  
                                </div> <!--end auth-logo-text-->  

                                
                                <form class="form-horizontal auth-form my-4" action="">
                                    <div class="form-group">
                                        <label for="username">Masukan Nomor ID</label>
                                        <div class="input-group mb-3">
                                            <span class="auth-form-icon">
                                                <i class="dripicons-user"></i> 
                                            </span>                                                                                                              
                                            <input type="email" class="form-control" id="username" placeholder="Masukan ID yang anda dapatkan disini">
                                        </div>                                    
                                    </div><!--end form-group--> 

                                    <div class="form-group mt-5 mb-0 row">
                                        <div class="col-12 mt-2">
                                            <a href="{{ route('status.user')}}">
                                                <div class="btn btn-success btn-round btn-block waves-effect waves-light"> Masuk </div>
                                            </a>
                                            {{-- <button class="btn btn-success btn-round btn-block waves-effect waves-light" type="submit">Masuk </button> --}}
                                        </div><!--end col--> 
                                    </div> <!--end form-group-->                           
                                </form><!--end form-->

                            </div><!--end /div-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end auth-page-->
            </div><!--end col-->           
        </div><!--end row-->
    </div>
    <!-- End Log In page -->

@include('layouts.partials.footer')
@endsection