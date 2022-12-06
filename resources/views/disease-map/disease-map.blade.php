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
    <div class="row pt-150 pb-150">
      <div class="col-lg-8">
          <div class="contact-map mt-60">
              <div class="gmap_canvas">                            
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31584.56354412436!2d114.31042168516441!3d-8.295788829210888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd156d7d86bef9b%3A0x4cb09a70b9109740!2sPoliteknik%20Negeri%20Banyuwangi!5e0!3m2!1sid!2sid!4v1670033853615!5m2!1sid!2sid" width="600" height="460" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
          </div> <!-- contact map -->
      </div>
      <div class="col-lg-4" >
        <div class="contact-form pt-60">
          <div class="auth-page">
            <div class="card auth-card shadow-lg" style="height: 340px">
                <div class="card-body">
                    <div class="px-3">
                      <h5 class="text-center">Keterangan</h5>
                      <p class="mt-4 text-dark">Kecamatan Songgon</p>
                      
                      <p class="text-small text-dark px-2"><i class="fa fa-circle fa-solid fa-2xs px-2"> </i><small> Zona Merah</small></p>
                      <p class="text-small text-dark px-2"><i class="fa fa-circle fa-solid fa-2xs px-2"> </i><small> 30 Kasus</small></p>
                    </div><!--end /div-->
                </div><!--end card-body-->
            </div><!--end card-->
          </div><!--end auth-page-->
        </div> <!-- contact form -->
      </div>
    </div> <!-- row -->
</div>

<!-- End Content -->


@include('layouts.partials.footer')
@endsection