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


<div class="background-image-auth">
    <div class="container-fluid">
        <div class="row pt-50" style="justify-content:center;">
            <div class="col-lg-4 align-self-center">
                <div class="auth-page">
                    <div class="card auth-card shadow-lg">
                        <div class="card-body">
                            <div class="px-2">
                                
                                <div class="text-center auth-logo-text">
                                    <p class="text-dark mb-0"> <b> Daftar </b></p>  
                                </div> <!--end auth-logo-text-->  

                                
                                <form class="form-horizontal auth-form my-4" action="">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <div class="input-group mb-3">
                                            <span class="auth-form-icon">
                                                <i class="dripicons-user"></i> 
                                            </span>                                                                                                              
                                            <input type="email" class="form-control" id="username" placeholder="Enter username">
                                        </div>                                    
                                    </div><!--end form-group--> 

                                    <div class="form-group">
                                        <label for="userpassword">Kata Sandi</label>                                            
                                        <div class="input-group mb-3"> 
                                            <span class="auth-form-icon">
                                                <i class="dripicons-lock"></i> 
                                            </span>                                                       
                                            <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                        </div>                               
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label for="userpassword">Ulangi Kata Sandi</label>                                            
                                        <div class="input-group mb-3"> 
                                            <span class="auth-form-icon">
                                                <i class="dripicons-lock"></i> 
                                            </span>                                                       
                                            <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                        </div>                               
                                    </div><!--end form-group--> 

                                    <div class="form-group mb-0 row">
                                        <div class="col-12 mt-2">
                                            <button class="btn btn-success btn-round btn-block waves-effect waves-light" type="submit">Daftar <i class="fas fa-sign-in-alt ml-1"></i></button>
                                        </div><!--end col--> 
                                    </div> <!--end form-group-->                           
                                    <p class="text-center mt-4"> <small> Sudah Punya Akun? <a href="{{ route('signin')}}" class="text-success">Masuk</a> </small> </p>
                                </form><!--end form-->

                            </div><!--end /div-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end auth-page-->
            </div><!--end col-->           
        </div><!--end row-->
    </div>
    <!-- End Log In page -->)
</div>

@endsection