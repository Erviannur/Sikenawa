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
            <h3 class="text-center text-dark mb-5"> <b> Konfirmasi Petugas </b></h3>
            
            <div class="d-flex justify-content-center">
              <form class="form-inline">
                <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Petugas Menuju Lokasi">
                <button type="submit" class="btn btn-success mb-2">Jalan</button>
              </form>
            </div>

            <div class=" d-flex justify-content-center form-css">
              <form class="form-inline mb-5">
                <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Seleasi Pemeriksaan">
                <button type="submit" class="btn btn-success mb-2">Selesai</button>
              </form>
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