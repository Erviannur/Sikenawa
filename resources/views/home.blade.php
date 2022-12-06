@extends('layouts.app')

@section('content')

    <!--====== HEADER PART START ======-->
    
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

        <div id="parallax" class="header-content d-flex align-items-center">
            <div class="header-shape shape-one layer" data-depth="0.10">
                <img src="assets/images/banner/shape/shape-1.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-tow layer" data-depth="0.30">
                <img src="assets/images/banner/shape/shape-2.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-three layer" data-depth="0.40">
                <img src="assets/images/banner/shape/shape-3.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-fore layer" data-depth="0.60">
                <img src="assets/images/banner/shape/shape-2.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-five layer" data-depth="0.20">
                <img src="assets/images/banner/shape/shape-1.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-six layer" data-depth="0.15">
                <img src="assets/images/banner/shape/shape-4.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-seven layer" data-depth="0.50">
                <img src="assets/images/banner/shape/shape-5.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-eight layer" data-depth="0.40">
                <img src="assets/images/banner/shape/shape-3.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-nine layer" data-depth="0.20">
                <img src="assets/images/banner/shape/shape-6.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-ten layer" data-depth="0.30">
                <img src="assets/images/banner/shape/shape-3.png" alt="Shape">
            </div> <!-- header shape -->

            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="header-content-right">
                            <h1 class="title"><u>SIKENAWA</u></h1>
                            <h3 class="text-dark mb-5"><b>Sistem informasi Kesehatan Ternak Banyuwangi</b></h3>
                            <p class="text-dark" style="text-align: justify">SIKENAWA merupakan platform dua arah yang menghubungkan antara divisi dinas peternakan Kabupaten Banyuwangi dengan peternak yang ada diseluruh Kabupaten Banyuwangi. Memuat informasi meengenai pengaduan dan peta penyebaran penyakit ternak yang ada di Kabupaten.</p>
                        </div> <!-- header content right -->            
                    </div>
                    <div class="col-lg-7">
                        <img src="{{ asset('assets/images/sapi/bg.jpeg') }}"  width="600px" alt="hero">
                    </div>
                </div>
            </div> <!-- container -->
        </div> <!-- header content -->
    </header>

    <!--====== HEADER PART ENDS ======-->



    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area pt-125 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-25">
                        <h2 class="title">Get In Touch</h2>
                        <p>Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-6 col-sm-7">
                    <div class="contact-box text-center mt-30">
                        <div class="contact-icon">
                            <i class="lni-map-marker"></i>
                        </div>
                        <div class="contact-content">
                            <h6 class="contact-title">Address</h6>
                            <p>123 Stree New York City , United States Of America 750</p>
                        </div>
                    </div> <!-- contact box -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-7">
                    <div class="contact-box text-center mt-30">
                        <div class="contact-icon">
                            <i class="lni-phone"></i>
                        </div>
                        <div class="contact-content">
                            <h6 class="contact-title">Phone</h6>
                            <p>+931 2222 5555</p>
                            <p>+547 5554 6663</p>
                        </div>
                    </div> <!-- contact box -->
                </div>
                
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CALL TO ACTION PART START ======-->

    <section id="call-to-action" class="call-to-action pt-125 pb-130 bg_cover" style="background-image: url(assets/images/call-to-action.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="call-action-content text-center">
                        <h2 class="action-title">Have any project on mind?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua nostrud.</p>
                        <ul>
                            <li><a class="main-btn custom" href="#">download cv</a></li>
                            <li><a class="main-btn custom-2" href="#">hire me</a></li>
                        </ul>
                    </div> <!-- call action content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CALL TO ACTION PART ENDS ======-->


    <section id="contact" class="contact-area pt-125 pb-30 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-25">
                        <h2 class="title">Get In Touch</h2>
                        <p>Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.</p>
                    </div> <!-- section title -->
                </div>
            </div> 
            <div class="row pt-50 pb-150">
                <div class="col-lg-8">
                    <div class="contact-map mt-20">
                        <div class="gmap_canvas">                            
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31584.56354412436!2d114.31042168516441!3d-8.295788829210888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd156d7d86bef9b%3A0x4cb09a70b9109740!2sPoliteknik%20Negeri%20Banyuwangi!5e0!3m2!1sid!2sid!4v1670033853615!5m2!1sid!2sid" width="600" height="460" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div> <!-- contact map -->
                </div>
                <div class="col-lg-4" >
                  <div class="contact-form pt-20">
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
        </div> <!-- container -->
    </section>

    
    <!--====== CONTACT PART ENDS ======-->


    <!-- Modal -->


    @include('layouts.partials.footer')

    @endsection