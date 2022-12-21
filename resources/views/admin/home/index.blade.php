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
              <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Selamat Datang Jason!</h3>
              <div class="d-flex align-items-center">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb m-0 p-0">
                          <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
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
      <!-- *************************************************************** -->
      <!-- Start First Cards -->
      <!-- *************************************************************** -->
      <div class="card-group">
          <div class="card border-right">
              <div class="card-body">
                  <div class="d-flex d-lg-flex d-md-block align-items-center">
                      <div>
                          <div class="d-inline-flex align-items-center">
                              <h2 class="text-dark mb-1 font-weight-medium">3</h2>
                              
                          </div>
                          <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Akun</h6>
                      </div>
                      <div class="ml-auto mt-md-3 mt-lg-0">
                          <span class="opacity-7 text-muted"><i class="fas fa-user-plus fa-lg"></i></span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="card border-right">
              <div class="card-body">
                  <div class="d-flex d-lg-flex d-md-block align-items-center">
                      <div>
                          <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium">10</h2>
                          <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Jenis Hewan
                          </h6>
                      </div>
                      <div class="ml-auto mt-md-3 mt-lg-0">
                          <span class="opacity-7 text-muted"><i class="fas fa-paw fa-lg"></i></span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="card border-right">
              <div class="card-body">
                  <div class="d-flex d-lg-flex d-md-block align-items-center">
                      <div>
                          <div class="d-inline-flex align-items-center">
                              <h2 class="text-dark mb-1 font-weight-medium">20</h2>
                          </div>
                          <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Pengaduan</h6>
                      </div>
                      <div class="ml-auto mt-md-3 mt-lg-0">
                          <span class="opacity-7 text-muted"><i class="fas fa-book fa-lg"></i></span>
                      </div>
                  </div>
              </div>
          </div>
          
      </div>
      <!-- *************************************************************** -->
      <!-- End First Cards -->
      <!-- *************************************************************** -->
      
      <!-- *************************************************************** -->
      <!-- Start Top Leader Table -->
      <!-- *************************************************************** -->
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-body">
                      <div class="d-flex align-items-center mb-4">
                          <h4 class="card-title">Akun Pengguna</h4>
                      </div>
                      <div class="table-responsive">
                          <table class="table no-wrap v-middle mb-0">
                              <thead>
                                  <tr class="border-0">
                                      <th class="border-0 font-14 font-weight-medium text-muted">No</th>
                                      <th class="border-0 font-14 font-weight-medium text-muted px-2">Email</th>
                                      <th class="border-0 font-14 font-weight-medium text-muted">Password</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td class="border-top-0 px-2 py-4">1</td>
                                      <td class="border-top-0 px-2 py-4">
                                          <div class="d-flex no-block align-items-center">
                                              <div class="">
                                                  <span class="text-muted font-14">hgover@gmail.com</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td class="border-top-0 text-muted px-2 py-4 font-14">vh2vgvj!fvjfv@vjvhertyuiijhygybbm </td>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- *************************************************************** -->
      <!-- End Top Leader Table -->
      <!-- *************************************************************** -->
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