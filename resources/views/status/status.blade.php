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
        <div class="row pt-200 pb-100" style="justify-content:center;">
            <div class="col-md-8 col-sm-6 col-12">
                <div class="card shadow-sm" style="height: 100%">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9 col-sm-8 col-12">
                                <ol class="tick-mark mt-3 mb-0">
                                    <li>
                                        <div class="bubble"></div>
                                        <p class="title">{{$pengaduan->status}}</p>
                                        <p class="font-italic"> <small>{{$pengaduan->created_at}}</small> </p>
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
                                <p class="text-dark small"><i class="fa fa-circle fa-2xs px-2"></i>{{$pengaduan->balasan}}</p>
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
