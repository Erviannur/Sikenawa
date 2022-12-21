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
              <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Jenis Hewan Ternak</h3>
              <div class="d-flex align-items-center">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb m-0 p-0">
                          <li class="breadcrumb-item">
                            <a href="index.html">Jenis Hewan Ternak</a>
                          </li>
                          <li class="breadcrumb-item">
                            <a href="index.html">Tambah Jenis Hewan Ternak</a>
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
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                  <div class="row">
                    <div class="col-lg-5">
                        <h3 class="text-dark">Tambah Hewan Ternak</h3>
                        <p class="text-muted" style="font-size: 10px;"><span>Pastikan nama hewan yang anda masukan benar</span></p>
                    </div>
                    <div class="col-lg-7">
                        <div class="card">
                          <div class="card-body  shadow-sm">
                            <form action="">
                              <div class="form-group">
                                <label for="">Nama Hewan <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">                                                                                                             
                                    <input type="text" class="form-control" id="" placeholder="Masukan Nama Hewan" name="" >
                                </div>  
                              </div>
                              <div class="form-group mb-0 row">
                                <div class="col-12 mt-2">
                                    <a href="{{ route('generate-code-report.user')}}">
                                        <button class="btn btn-success btn-round btn-block waves-effect waves-light">Simpan <i class="fas fa-sign-in-alt ml-1"></i></button>
                                    </a>
                                </div><!--end col--> 
                            </div>
                            </form>
                          </div>
                        </div>
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