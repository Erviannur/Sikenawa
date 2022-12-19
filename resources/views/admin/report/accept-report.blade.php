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
              <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Ulasan Pengaduan</h3>
              <div class="d-flex align-items-center">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb m-0 p-0">
                          <li class="breadcrumb-item">
                            <a href="">Data Pengaduan</a>
                          </li>
                          <li class="breadcrumb-item">
                            <a href="">Ulasan Pengaduan</a>
                          </li>
                          <li class="breadcrumb-item">
                            <a href="">Balasan Pengaduan</a>
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
    
    <div class="row">
      <div class="col">
        <h2 class="text-dark text-center"> <b> Balasan Untuk Aduan </b></h2>
        <div class="card">
          <div class="card-body">
            <form action="">
                <div class="form-group mx-sm-3 mb-2">
                    <textarea class="form-control" rows="10" placeholder="Ketikan balasan disini"></textarea>
                  </div>
            </form>
          </div>
          <div class="d-flex justify-content-center mb-3">
            <div class="btn-list">
              <a href="{{ route('success-report.admin') }}">
                <div type="button" class="btn waves-effect waves-light btn-success">Kirim</div>
              </a>
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