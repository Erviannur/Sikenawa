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
              <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Pengaduan</h3>
              <div class="d-flex align-items-center">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb m-0 p-0">
                          <li class="breadcrumb-item">
                            <a href="index.html">Data Pengaduan</a>
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
                  <div class="table-responsive">
                      <table id="zero_config" class="table table-striped table-bordered no-wrap">
                          <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Tanggal</th>
                                  <th>Nama</th>
                                  <th>Status</th>
                                  <th>Opsi</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($pengaduan as $key => $pengaduan)
                              <tr>
                                  <td>{{$key+1}}</td>
                                  <td>{{$pengaduan->tanggal}}</td>
                                  <td>{{$pengaduan->name}}</td>
                                  <td>
                                    <p>Petugas Menuju Lokasi <button class="btn btn-sm btn-warning btn-rounded">Selesai</button> </p>
                                    
                                    {{-- Jika admin sudah melakkukan pengecekan ke lokasi pencet tombol selesai 
                                      kemudian status berubah menajadi Sudah selesai dan button hilang  --}}
                                    

                                  </td>
                                  <td>
                                    <a href="{{ route('viewreport.index')}}">
                                      <button class="btn btn-sm btn-success btn-rounded" >
                                        <i class="fas fa-print"></i> Cek
                                      </button>
                                    </a>
                                  </td>
                              </tr>
                              @endforeach
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