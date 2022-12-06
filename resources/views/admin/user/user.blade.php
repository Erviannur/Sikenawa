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
              <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Akun Pengguna</h3>
              <div class="d-flex align-items-center">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb m-0 p-0">
                          <li class="breadcrumb-item">
                            <a href="index.html">Akun</a>
                          </li>
                      </ol>
                  </nav>
              </div>
          </div>
          <div class="col-5 align-self-center">
            <div class="customize-input float-right">
              <button class="btn btn-success btn-sm btn-rounded">Tambah Akun</button>
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
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                  <div class="table-responsive">
                      <table id="zero_config" class="table table-striped table-bordered no-wrap">
                          <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Username</th>
                                  <th>No. Hp</th>
                                  <th>Password</th>
                                  <th>Opsi</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Vian</td>
                                  <td>081230467878</td>
                                  <td>92353bb0685dd9c566a17f822b21ded5</td>
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