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
    {{-- <div class="row pt-150 pb-100" style="justify-content:center;">
        <div class="col-lg-7 pt-60 align-self-top">
            <div class="auth-page">
                <div class="card auth-card shadow-lg" style="height:100%">
                    <div class="card-body">
                        <div class="px-3 mt-3">
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                        <tr>
                                            <td> <i class="fa fa-circle fa-solid fa-lg px-2 text-success" > </i> </td>
                                            <td> <p class="text-dark"> <small> Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, maxime. </small> </p> </td>
                                        </tr> 
                                        <tr>
                                            <td> <i class="fa fa-circle fa-solid fa-lg px-2 text-success" > </i> </td>
                                            <td> <p class="text-dark"> <small> Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, maxime. </small> </p> </td>
                                        </tr>
                                        <tr>
                                            <td> <i class="fa fa-circle fa-solid fa-lg px-2 text-success" > </i> </td>
                                            <td> <p class="text-dark"> <small> Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, maxime. </small> </p> </td>
                                        </tr>
                                        <tr>
                                            <td> <i class="fa fa-circle fa-solid fa-lg px-2 text-success" > </i> </td>
                                            <td> <p class="text-dark"> <small> Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, maxime. </small> </p> </td>
                                        </tr>
                                </table>
                            </div>                    
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end auth-page-->
        </div><!--end col-->  

        <div class="col-lg-5 pt-60 align-self-top">
            <div class="auth-page">
                <div class="card auth-card shadow-lg" style="height:100%">
                    <div class="card-body " style="background-color: rgb(120, 242, 120);">
                        <div class="px-3">
                            <h5 class="text-center mb-5">Keterangan</h5>
                            <p class="text-small text-dark px-2"><i class="fa fa-circle fa-solid fa-2xs px-2"> </i><small> Pertolongan pertama pada ternak</small></p>                           
                        </div><!--end /div-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end auth-page-->
        </div><!--end col-->  
    </div><!--end row--> --}}

        <div class="row pt-200 pb-100" style="justify-content:center;">
            <div class="col-md-8 col-sm-6 col-12">
                <div class="card shadow-sm" style="height: 100%">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9 col-sm-8 col-12">
                                <ol class="tick-mark mt-3 mb-0">
                                    <li>
                                        <div class="bubble"></div>
                                        <p class="title">Pengajuan telah dikirim</p>
                                        <p class="font-italic"> <small>20/12/2002</small> </p>
                                    </li>
                                    <li>
                                        <div class="bubble"></div>
                                        <p class="title m-0 p-0">Pengajuan telah diterima</p>
                                        <p class="font-italic"> <small>20/12/2002</small> </p>
                                    </li>
                                    <li>
                                        <div class="bubble"></div>
                                        <p class="title m-0 p-0 mb-0">Petugas ke lokasi untuk melakukan pengecekan</p>
                                        <p class="font-italic mb-0"> <small>20/12/2002</small> </p>
                                    </li>
                                    <li>
                                        <div class="bubble"></div>
                                        <p class="title">Pemeriksaan selesai</p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
                <div class="card shadow-sm" style="height: 100%">
                    <div class="card-body" style="background-color: rgb(120, 242, 120);">
                        <h5 class="text-center mb-3">Keterangan</h5>
                        <ol class="text-dark">
                            <li>
                                <p class="text-dark small"><i class="fa fa-circle fa-2xs px-2"></i> Menunggu verifikasi admin</p>
                            </li>
                            <li>
                                <p class="text-dark small"><i class="fa fa-circle fa-2xs px-2"></i> Menunggu verifikasi admin</p>
                            </li>
                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>


    
</div>

<!-- End Content -->


@include('layouts.partials.footer')
@endsection