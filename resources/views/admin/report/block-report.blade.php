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
                            <a href="{{ route('report.admin')}}">Data Pengaduan</a>
                          </li>
                          <li class="breadcrumb-item">
                            <a href="{{ route('view-report.admin')}}">Ulasan Pengaduan</a>
                          </li>
                          <li class="breadcrumb-item">
                            <a href="{{ route('accept-report.admin')}}">Balasan Pengaduan</a>
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
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-center">
                <i class="fas fa-check-circle text-danger fa-10x"></i>
            </div>
            <p class="text-center mt-4">Terimakasih Balasan sudah terkirim,peternak akan segera  diberi tahu</p>
          </div>
            <div class="btn-list mb-3 px-5">
              <a href="{{ route('report.admin') }}">
                <div type="button" class="btn waves-effect waves-light btn-primary">Ke halaman awal</div>
              </a>
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