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
                              <h2 class="text-dark mb-1 font-weight-medium">236</h2>
                              <span
                                  class="badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none">+18.33%</span>
                          </div>
                          <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">New Clients</h6>
                      </div>
                      <div class="ml-auto mt-md-3 mt-lg-0">
                          <span class="opacity-7 text-muted"><i data-feather="user-plus"></i></span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="card border-right">
              <div class="card-body">
                  <div class="d-flex d-lg-flex d-md-block align-items-center">
                      <div>
                          <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                  class="set-doller">$</sup>18,306</h2>
                          <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Earnings of Month
                          </h6>
                      </div>
                      <div class="ml-auto mt-md-3 mt-lg-0">
                          <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="card border-right">
              <div class="card-body">
                  <div class="d-flex d-lg-flex d-md-block align-items-center">
                      <div>
                          <div class="d-inline-flex align-items-center">
                              <h2 class="text-dark mb-1 font-weight-medium">1538</h2>
                              <span
                                  class="badge bg-danger font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block">-18.33%</span>
                          </div>
                          <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">New Projects</h6>
                      </div>
                      <div class="ml-auto mt-md-3 mt-lg-0">
                          <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="card">
              <div class="card-body">
                  <div class="d-flex d-lg-flex d-md-block align-items-center">
                      <div>
                          <h2 class="text-dark mb-1 font-weight-medium">864</h2>
                          <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Projects</h6>
                      </div>
                      <div class="ml-auto mt-md-3 mt-lg-0">
                          <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
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
                          <h4 class="card-title">Notifikasi Masuk</h4>
                      </div>
                      <div class="table-responsive">
                          <table class="table no-wrap v-middle mb-0">
                              <thead>
                                  <tr class="border-0">
                                      <th class="border-0 font-14 font-weight-medium text-muted">Team Lead
                                      </th>
                                      <th class="border-0 font-14 font-weight-medium text-muted px-2">Project
                                      </th>
                                      <th class="border-0 font-14 font-weight-medium text-muted">Team</th>
                                      <th class="border-0 font-14 font-weight-medium text-muted">Data</th>

                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td class="border-top-0 px-2 py-4">
                                          <div class="d-flex no-block align-items-center">
                                              <div class="">
                                                  <h5 class="text-dark mb-0 font-16 font-weight-medium">Hanna
                                                      Gover</h5>
                                                  <span class="text-muted font-14">hgover@gmail.com</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td class="border-top-0 text-muted px-2 py-4 font-14">Elite Admin</td>
                                      <td class="border-top-0 text-center font-weight-medium text-muted px-2 py-4"> 35</td>
                                      <td class="font-weight-medium text-dark border-top-0 px-2 py-4">$96K
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