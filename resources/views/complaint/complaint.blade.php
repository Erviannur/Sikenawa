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
        

<div class="background-image" style="background-image: url('{{ asset('assets/images/sapi/background.jpeg') }}">
    <div class="container-fluid">
        <div class="row pt-150 pb-130" style="justify-content:center;">
            <div class="col-lg-5 align-self-center">
                <div class="auth-page">
                    <div class="card auth-card shadow-lg">
                        <div class="card-body">
                            <div class="px-3">
                                
                                <div class="text-center auth-logo-text">
                                    <h4 class="text-muted mb-0">Pengaduan Hewan Ternak</h4>  
                                </div> <!--end auth-logo-text-->  
    
                                
                                <form class="form-horizontal auth-form my-4" action="" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="username">Nama</label>
                                        <div class="input-group mb-3">                                                                                                             
                                            <input type="text" class="form-control" id="username" placeholder="Masukan Nama" name="name" required>
                                        </div>                                    
                                    </div><!--end form-group--> 

                                    <div class="form-group">
                                        <label for="nomer">Nomer Hp</label>
                                        <div class="input-group mb-3">                                                                                                             
                                            <input type="text" class="form-control" id="nomer" placeholder="Masukan Nomer Hp" name="nomer" required>
                                        </div>                                    
                                    </div><!--end form-group--> 

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <div class="input-group mb-3">                                                                                                             
                                            <input type="email" class="form-control" id="email" placeholder="Masukan Email" name="email" required>
                                        </div>                                    
                                    </div><!--end form-group--> 

                                    <div class="form-group">
                                        <label for="Alamat">Alamat</label>
                                        <div class="input-group mb-3">                                                                                                             
                                            <input type="text" class="form-control" id="Alamat" placeholder="Masukan Alamat" name="alamat" required>
                                        </div>                                    
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label for="keterangan">Keterangan</label>
                                        <div class="input-group mb-3">
                                            <textarea type="text" class="form-control" id="keterangan" placeholder="isi aduan" name="keterangan" required rows="5"> </textarea>
                                        </div>                                    
                                    </div><!--end form-group--> 

                                    <div class="form-group mb-0 row">
                                        <div class="col-12 mt-2">
                                            <button class="btn btn-success btn-round btn-block waves-effect waves-light" type="submit">Masuk <i class="fas fa-sign-in-alt ml-1"></i></button>
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

</div>

@include('layouts.partials.footer')

@endsection
    