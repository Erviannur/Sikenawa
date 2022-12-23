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
                    <div class="contact-map">
                        <div class="gmap_canvas">                            
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31584.56354412436!2d114.31042168516441!3d-8.295788829210888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd156d7d86bef9b%3A0x4cb09a70b9109740!2sPoliteknik%20Negeri%20Banyuwangi!5e0!3m2!1sid!2sid!4v1670033853615!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                        <p class="mt-4 text-dark">Kecamatan Songgon</p>
                        <li>
                            <p class="text-dark small"><i class="fa fa-circle fa-2xs px-2"></i> Zona Merah</p>
                        </li>
                        <li>
                            <p class="text-dark small"><i class="fa fa-circle fa-2xs px-2"></i> 30 Kasus</p>
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