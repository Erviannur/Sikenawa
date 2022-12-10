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
                            <a href="{{ route('report.index')}}">Data Pengaduan</a>                           
                          </li>
                          <li class="breadcrumb-item">                            
                            <a href="{{ route('viewreport.index')}}">Ulasan Pengaduan</a>
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
                    <td> <p class="text-dark"> <small> Tanggal Pengaduan </small> </p> </td>
                    <td> <p class="text-dark text-right"> <small> : </small> </p> </td>
                    <td> <p class="text-dark"> <small> 25 Desember 2022 </small> </p> </td>
                </tr> 
                <tr>
                    <td> <p class="text-dark"> <small> Nama </small> </p> </td>
                    <td> <p class="text-dark text-right"> <small> : </small> </p> </td>
                    <td> <p class="text-dark"> <small> Jason D.guard </small> </p> </td>
                </tr> 
                <tr>
                    <td> <p class="text-dark"> <small> Nomor </small> </p> </td>
                    <td> <p class="text-dark text-right"> <small> : </small> </p> </td>
                    <td> <p class="text-dark"> <small> 081234768765 </small> </p> </td>
                </tr> 
                <tr>
                    <td> <p class="text-dark"> <small> E-mail </small> </p> </td>
                    <td> <p class="text-dark text-right"> <small> : </small> </p> </td>
                    <td> <p class="text-dark"> <small> example@gmail.com </small> </p> </td>
                </tr> 
                <tr>
                    <td> <p class="text-dark"> <small> Lokasi </small> </p> </td>
                    <td> <p class="text-dark text-right"> <small> : </small> </p> </td>
                    <td> <p class="text-dark"> <small> Jalan Arteri Raya 17, RT 06 RW 07, Kelurahan Macanan, Kecamatan Bumiayu, Kota Surabaya  </small> </p> </td>
                </tr> 
                <tr>
                    <td> <p class="text-dark"> <small> Isi Aduan </small> </p> </td>
                    <td> <p class="text-dark text-right"> <small> : </small> </p> </td>
                    <td> <p class="text-dark"> <small> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, possimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, aut! </small> </p> </td>
                </tr> 
                      
              </table>
          </div>       
            
            {{-- <div class="row">
              <div class="col-lg-3">
                <p>Tanggal Pengaduan</p>
                <p>Nama</p>
                <p>Nomor Hp</p>
                <p>E-mail</p>
                <p>Lokasi</p>
                <p>Isi Aduan</p>
              </div>
              <div class="col-lg-1" style="text-align: right">
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
              </div>
              @foreach($pengaduan as $key => $pengaduan)
              <div class="col-lg-8">
<<<<<<< HEAD
                <p>10 Desember 2022</p>
                <p>Lorem, ipsum dolor sit amet </p>
                <p>08766788931</p>
                <p>example@gmail.com</p>
                <p>Jalan Arteri Raya 17, RT 06 RW 07, Kelurahan Macanan, Kecamatan Bumiayu, Kota Surabaya</p>
                <p class="" style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, quae iste? Earum amet eaque eos id exercitationem voluptas quasi at porro similique reprehenderit, deleniti optio quod tempore minima possimus vero. Quidem maxime incidunt rerum neque magni molestiae sapiente dignissimos possimus esse tempora inventore suscipit quibusdam dolor, reprehenderit a et corporis tenetur consectetur. Nemo ad incidunt eveniet ex neque ipsa non minus tenetur nisi, expedita veritatis iusto aliquid animi quas cum iure praesentium quaerat, voluptas eaque reprehenderit sit! Doloremque nulla consectetur obcaecati, ipsum laboriosam quasi vel modi magni enim similique, beatae, fugiat culpa. Laboriosam sit rerum tempora doloremque similique, dolor ab?</p>
              </div>
            </div> --}}
=======
                <p>{{$pengaduan->tanggal}}</p>
                <p>{{$pengaduan->name}}</p>
                <p>{{$pengaduan->nomer}}</p>
                <p>{{$pengaduan->email}}</p>
                <p>{{$pengaduan->idLokasi}}</p>
                <p>{{$pengaduan->keterangan}}</p>
                </div>
              @endforeach
            </div>
>>>>>>> 2433afbf40dfd982371fe24d12c24780dedcb314
            
          </div>
          <div class="d-flex justify-content-center mb-3">
            <div class="btn-list">
              <a href="{{ route('report.index') }}">
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