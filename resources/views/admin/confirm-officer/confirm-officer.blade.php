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
              <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Konfirmasi Petugas</h3>
              <div class="d-flex align-items-center">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb m-0 p-0">
                          <li class="breadcrumb-item">
                            <a href="index.html">Konfirmasi Petugas</a>
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

    {{-- <div class="row" >
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h3 class="text-center text-dark"> <b> Konfirmasi Petugas </b></h3>
              <div class="row justify-content-md-center">
                <div class="col-lg-5 col-md-auto">
                  <div class="card-body">
                      <form class="form-inline" style="margin-top: 30px">
                        <div class="form-group mx-sm-3 mb-2">
                          <label for="inputPassword2" class="sr-only">Berangkat Ke Lokasi</label>
                          <input type="text" class="form-control" id="inputPassword2" placeholder="Berangkat ke lokasi">
                        </div>
                        <button type="submit" class="btn btn-success mb-2" style="width: 80px;">Jalan</button>
                      </form>
                      
                      <form action="" class="form-inline" style="margin-top: 50px">
                        <div class="form-group mx-sm-3 mb-2">
                          <label for="Location" class="sr-only">Berangkat Ke Lokasi</label>
                          <input type="text" class="form-control" id="Location" placeholder="Pemeriksaan selesai">
                        </div>
                        <button type="submit" class="btn btn-success mb-2" style="width: 80px;">Selesai</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>  
            </div>
          </div>
        </div>
      </div> --}}
      
      
    <div class="row ">
      <div class="col">
        <div class="card">
          <div class="card-body">

            <div class="row">
              <div class="col-lg-10">
                <h5 class="text-dark"><i class="fas fa-solid fa-2x fa-motorcycle p-3"></i>Berangkat Menuju Lokasi</h5>
              </div>
              <div class="col-lg-2">
                <button class="btn btn-success btn-block" type="submit"> Jalan </button>
              </div>
            </div>

          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-10">
                <h5 class="text-dark"><i class="fas fa-solid fa-2x fa-stethoscope p-3"></i> Pemeriksaan selesai</h5>
              </div>
              <div class="col-lg-2">
                <button class="btn btn-success btn-block" type="submit"> Selesai </button>
              </div>
          </div>
        </div>

        </div>
      </div>
    </div>

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