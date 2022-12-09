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


            {{-- <table border="0">
              <tbody>
                <tr>
                  <td style="width: 180px">Tanggal Pengaduan</td>
                  <td style="width: 15px">:</td>
                  <td>10 Desember 2022</td>
                </tr>
                <tr>
                  <td style="width: 180px">Nama</td>
                  <td style="width: 15px">:</td>
                  <td>Bang Johnes</td>
                </tr>
                <tr>
                  <td style="width: 180px">Nomor Hp</td>
                  <td style="width: 15px">:</td>
                  <td>07872364732</td>
                </tr>
                <tr>
                  <td style="width: 180px">Email</td>
                  <td style="width: 15px">:</td>
                  <td>example@gmail.com</td>
                </tr>
                <tr>
                  <td style="width: 180px">Lokasi</td>
                  <td style="width: 15px">:</td>
                  <td>Jalan Arteri Raya 17, RT 06 RW 07, Kelurahan Macanan, Kecamatan Bumiayu, Kota Surabaya</td>
                </tr>
                <tr>
                  <td style="width: 150px">Isi Aduan</td>
                  <td style="width: 15px">:</td>
                  <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque hic ea quos laudantium quae nostrum neque, quis consequuntur dicta similique vero nulla repudiandae ratione soluta at iure eveniet accusamus assumenda deserunt dolore. Expedita laborum iusto, impedit animi culpa eos quidem! Fugiat ipsa consectetur, dolore quod asperiores molestiae exercitationem quasi reprehenderit eum error nostrum aut quaerat similique non totam! Distinctio velit explicabo, reiciendis quae vel quisquam voluptas id ea sequi officia accusamus hic tempora illo, provident facilis harum, suscipit natus cum aut repellat. Architecto aperiam a quas ratione culpa laudantium officia magnam illum suscipit, veniam, consectetur alias tempora inventore reprehenderit at!</td>
                </tr>
                
              </tbody>
            </table>
               --}}
            
            <div class="row">
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
                <p>{{$pengaduan->tanggal}}</p>
                <p>{{$pengaduan->name}}</p>
                <p>{{$pengaduan->nomer}}</p>
                <p>{{$pengaduan->email}}</p>
                <p>{{$pengaduan->idLokasi}}</p>
                <p>{{$pengaduan->keterangan}}</p>
                </div>
              @endforeach
            </div>
            
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