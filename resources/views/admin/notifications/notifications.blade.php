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
              <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Notifikasi Masuk</h3>
              <div class="d-flex align-items-center">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb m-0 p-0">
                          <li class="breadcrumb-item">
                            <a href="index.html">Notifikasi</a>
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
      <div class="col-lg-12">
          <div class="card">
              <div class="card-body">
                  <div class="alert alert-primary text-dark" role="alert">
                      <strong><i class="fas fa-bell px-3"></i></strong> <b> Laporan Pengaduan </b> <br>
                      <small class="text-success " style="margin-left: 15px">21 November 2022</small>
                  </div>
                  <div class="alert alert-primary text-dark" role="alert">
                      <strong><i class="fas fa-bell px-3"></i></strong> <b> Laporan Pengaduan </b> <br>
                      <small class="text-success " style="margin-left: 15px">21 November 2022</small>
                  </div>
                  <div class="alert alert-primary text-dark" role="alert">
                      <strong><i class="fas fa-bell px-3"></i></strong> <b> Laporan Pengaduan </b> <br>
                      <small class="text-success " style="margin-left: 15px">21 November 2022</small>
                  </div>
                  <div class="alert alert-primary text-dark" role="alert">
                      <strong><i class="fas fa-bell px-3"></i></strong> <b> Laporan Pengaduan </b> <br>
                      <small class="text-success " style="margin-left: 15px">21 November 2022</small>
                  </div>
                  <div class="alert alert-primary text-dark" role="alert">
                      <strong><i class="fas fa-bell px-3"></i></strong> <b> Laporan Pengaduan </b> <br>
                      <small class="text-success " style="margin-left: 15px">21 November 2022</small>
                  </div>
                  <div class="alert alert-primary text-dark" role="alert">
                      <strong><i class="fas fa-bell px-3"></i></strong> <b> Laporan Pengaduan </b> <br>
                      <small class="text-success " style="margin-left: 15px">21 November 2022</small>
                  </div>
              </div> <!-- end card-body-->
          </div> <!-- end card-->
      </div> <!-- end col-->
  </div>
  <!-- end row -->


{{--     
    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                  <div class="table-responsive">
                      <table id="zero_config" class="table table-striped table-bordered no-wrap">
                          <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Username</th>
                                  <th>Username</th>
                                  <th>Username</th>
                                  <th>Username</th>
                                  <th>Username</th>
                                  <th>Opsi</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Vian</td>
                                  <td>Vian</td>
                                  <td>Vian</td>
                                  <td>Vian</td>
                                  <td>Vian</td>
                                  <td>
                                    <a href="">
                                      <button class="btn btn-sm btn-warning btn-rounded">
                                        <i class="fas fa-edit"></i>
                                      </button>
                                    </a>
                                    <a href="">
                                      <button class="btn btn-sm btn-danger btn-rounded" >
                                        <i class="fas fa-trash"></i>
                                      </button>
                                    </a>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div> --}}

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