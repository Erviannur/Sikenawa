@extends('admin.layouts.app')

@section('main-content')

@include('admin.layouts.partials.navbar')

<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="page-breadcrumb">
      <div class="row">
          <div class="col-7 align-self-center">
              <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Peta</h3>
              <div class="d-flex align-items-center">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb m-0 p-0">
                          <li class="breadcrumb-item">
                            <a href="index.html">Data Peta</a>
                          </li>
                      </ol>
                  </nav>
              </div>
          </div>
      </div>
  </div>
  <!-- ============================================================== -->
  <!-- End Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  
  <!-- ============================================================== -->
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <div class="container-fluid">
    
    <!-- ============================================================== -->
    <!-- Content  -->
    <!-- ============================================================== -->

    <div class="row pt-200 pb-100" style="justify-content:center;">
      <div class="col-md-8 col-sm-6 col-12">
          <div class="card shadow-sm" style="height: 100%">
              <div class="card-body">
                <div class="contact-map">
                  <div class="gmap_canvas">                            
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31584.56354412436!2d114.31042168516441!3d-8.295788829210888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd156d7d86bef9b%3A0x4cb09a70b9109740!2sPoliteknik%20Negeri%20Banyuwangi!5e0!3m2!1sid!2sid!4v1670033853615!5m2!1sid!2sid"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                </div> <!-- end card-body-->
              </div>
          </div>
      </div>
      <div class="col-md-4 col-sm-6 col-12">
          <div class="card shadow-sm" style="height: 100%">
            <div class="card-body">

              <form class="" action="" method="">
                <div class="form-group ">
                    <label for="exampleFormControlSelect1">Titik Lokasi</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Koordinat Titik Lokasi Latitude</label>
                  <input type="text" class="form-control" id="" placeholder="Masukan Titik Lokasi Latitude" name="" >
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Koordinat Titik Lokasi Longtitude</label>
                  <input type="text" class="form-control" id="" placeholder="Masukan Titik Lokasi Longtitude" name="" >
                </div>
                <p>Kategori Zona</p>
                <div class="btn-list pb-3 d-flex justify-content-between">
                  <button type="button" class="btn waves-effect waves-light btn-danger" style="width: 93px">Merah</button>
                  <button type="button" class="btn waves-effect waves-light btn-warning" style="width: 93px">Kuning</button>
                  <button type="button" class="btn waves-effect waves-light btn-success" style="width: 93px">Hijau</button>
                </div>
                <button class="btn btn-success btn-block" >Masukan Data</button>
            </form>
            </div>
          </div>
      </div>
  </div>

    {{-- <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-8">
            <div class="contact-map">
              <div class="gmap_canvas">                            
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31584.56354412436!2d114.31042168516441!3d-8.295788829210888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd156d7d86bef9b%3A0x4cb09a70b9109740!2sPoliteknik%20Negeri%20Banyuwangi!5e0!3m2!1sid!2sid!4v1670033853615!5m2!1sid!2sid" width="450" height="460" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div> <!-- end card-body-->
          </div> <!-- end col-->
  
          <div class="col-lg-4">
            <form class="" action="" method="">
              <div class="form-group ">
                  <label for="exampleFormControlSelect1">Titik Lokasi</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Koordinat Titik Lokasi Latitude</label>
                <input type="text" class="form-control" id="" placeholder="Masukan Titik Lokasi Latitude" name="" >
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Koordinat Titik Lokasi Longtitude</label>
                <input type="text" class="form-control" id="" placeholder="Masukan Titik Lokasi Longtitude" name="" >
              </div>
              <p>Kategori Zona</p>
              <div class="btn-list pb-3 d-flex justify-content-between">
                <button type="button" class="btn waves-effect waves-light btn-danger" style="width: 93px">Merah</button>
                <button type="button" class="btn waves-effect waves-light btn-warning" style="width: 93px">Kuning</button>
                <button type="button" class="btn waves-effect waves-light btn-success" style="width: 93px">Hijau</button>
              </div>
              <button class="btn btn-success btn-block" >Masukan Data</button>
          </form>

          </div> <!-- end col-->
        </div>
      </div>
    </div> --}}
  <!-- end row -->



    <!-- ============================================================== -->
    <!-- End Content  -->
    <!-- ============================================================== -->
      

  </div>
  <!-- ============================================================== -->
  <!-- End Container fluid  -->
  <!-- ============================================================== -->
  @include('admin.layouts.partials.footer')
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->  

@endsection