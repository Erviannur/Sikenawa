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

            <div class="table-responsive">
              <table class="table table-sm mb-0 table-borderless">

                <tr>
                    <td> <p class="text-dark"> <small> Tanggal </small> </p> </td>
                    <td> <p class="text-dark text-right"> <small> : </small> </p> </td>
                    <td> <p class="text-dark"> <small>{{$pengaduan->tanggal}}</small> </p> </td>
                </tr>
                <tr>
                    <td> <p class="text-dark"> <small> Nama </small> </p> </td>
                    <td> <p class="text-dark text-right"> <small> : </small> </p> </td>
                    <td> <p class="text-dark"> <small>{{$pengaduan->name}}</small> </p> </td>
                </tr>
                <tr>
                    <td> <p class="text-dark"> <small> Nomor </small> </p> </td>
                    <td> <p class="text-dark text-right"> <small> : </small> </p> </td>
                    <td> <p class="text-dark"> <small>{{$pengaduan->nomer}}</small> </p> </td>
                </tr>
                <tr>
                    <td> <p class="text-dark"> <small> E-mail </small> </p> </td>
                    <td> <p class="text-dark text-right"> <small> : </small> </p> </td>
                    <td> <p class="text-dark"> <small>{{$pengaduan->email}}</small> </p> </td>
                </tr>
                <tr>
                    <td> <p class="text-dark"> <small> Lokasi </small> </p> </td>
                    <td> <p class="text-dark text-right"> <small> : </small> </p> </td>
                    <td> <p class="text-dark"> <small>{{$pengaduan->desas->name}}, {{$pengaduan->kecamatans->name}}, {{$pengaduan->kabupatens->name}}, {{$pengaduan->provinsis->name}}</small> </p> </td>
                </tr>
                <tr>
                    <td> <p class="text-dark"> <small> Gambar </small> </p> </td>
                    <td> <p class="text-dark text-right"> <small> : </small> </p> </td>
                    <td> <img src="{{ asset($pengaduan->foto)}}" class="img-fluid" alt="...">  </td>
                </tr>
                <tr>
                    <td> <p class="text-dark"> <small> Nama Hewan </small> </p> </td>
                    <td> <p class="text-dark text-right"> <small> : </small> </p> </td>
                    <td> <p class="text-dark"> <small>{{$pengaduan->jenisHewan}}</small> </p>  </td>
                </tr>
                <tr>
                    <td> <p class="text-dark"> <small> Isi Aduan </small> </p> </td>
                    <td> <p class="text-dark text-right"> <small> : </small> </p> </td>
                    <td> <p class="text-dark"> <small>{{$pengaduan->keterangan}}</small> </p> </td>
                </tr>
              </table>
          </div>
          </div>
          <div class="d-flex justify-content-center mb-3">
            <div class="btn-list">
              <a href="{{ route('failed-report.admin') }}">
                <div type="button" class="btn waves-effect waves-light btn-danger">Tolak</div>
              </a>
              <a href="{{ route('accept-report.admin') }}">
                <div type="button" class="btn waves-effect waves-light btn-success">Terima</div>
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
