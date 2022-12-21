@extends('layouts.app')


@section('content')

<header id="home" class="header-area">
    <div class="navigation fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">   

                    @include('layouts.partials.navbar')
                    
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- navigation -->
</header>
        

<div class="background-image">
    <div class="container-fluid">
        <div class="row pt-200 pb-130" style="justify-content:center;">
            <div class="col-lg-5 align-self-center">
                <div class="auth-page">
                    <div class="card auth-card shadow-lg">
                        <div class="card-body">
                            <div class="px-3">
                                
                                <div class="text-center auth-logo-text">
                                    <h4 class="text-muted mb-0">Pengaduan Hewan Ternak</h4>  
                                </div> <!--end auth-logo-text-->  
    
                                
                                <form class="form-horizontal auth-form my-4" action="{{ route('pengaduan.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Nama <span class="text-danger">*</span> </label>
                                        <div class="input-group mb-3">                                                                                                             
                                            <input type="text" class="form-control" id="name" placeholder="Masukan Nama" name="name" >
                                        </div>                                    
                                    </div><!--end form-group--> 

                                    <div class="form-group">
                                        <label for="nomer">Nomer Hp <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">                                                                                                             
                                            <input type="text" class="form-control" id="nomer" placeholder="Masukan Nomer Hp" name="nomer" >
                                        </div>                                    
                                    </div><!--end form-group--> 

                                    <div class="form-group">
                                        <label for="email">Email <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">                                                                                                             
                                            <input type="email" class="form-control" id="email" placeholder="Masukan Email" name="email" >
                                        </div>                                    
                                    </div><!--end form-group--> 

                                    <div class="form-group">
<<<<<<< HEAD
                                        <label for="tanggal">Tanggal</label>
=======
                                        <label for="tanggal">tanggal <span class="text-danger">*</span></label>
>>>>>>> 71b510d3459cb5e4f3b997acce90f1eca87c149d
                                        <div class="input-group mb-3">                                                                                                             
                                            <input type="date" class="form-control" id="tanggal" placeholder="Masukan tanggal" name="tanggal" >
                                        </div>                                    
                                    </div><!--end form-group--> 

                                    <div class="form-group">
                                        <label for="provinsi">Provinsi</label>
                                        <select class="form-control @error('provinsi') is-invalid @enderror" id="provinsi"  name="provinsi" required>
                                            <option >Pilih provinsi ..</option>                                            
                                            @foreach ($provinces as $provinsi)
                                                <option value="{{ $provinsi->name}}">{{$provinsi->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('provinsi') <span class="text-danger">{{$message}}</span> @enderror                               
                           
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label for="kabupaten">Kabupaten</label>
                                        <select class="form-control @error('kabupaten') is-invalid @enderror" id="kabupaten"  name="kabupaten" required>
                                            <option >Pilih kabupaten ..</option>
                                            @foreach ($regencies as $kabupaten)
                                                <option value="{{ $kabupaten->name}}">{{$kabupaten->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('kabupaten') <span class="text-danger">{{$message}}</span> @enderror                               
                           
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label for="kecamatan">Kecamatan</label>
                                        <select class="form-control @error('kecamatan') is-invalid @enderror" id="kecamatan"  name="kecamatan" required>
                                            <option >Pilih kecematan ..</option>
                                            @foreach ($districts as $kecamatan)
                                                <option value="{{ $kecamatan->name}}">{{$kecamatan->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('kecamatan') <span class="text-danger">{{$message}}</span> @enderror                               
                           
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label for="desa">Desa</label>
                                        <select class="form-control @error('desa') is-invalid @enderror" id="desa"  name="desa" required>
                                            <option >Pilih desa ..</option>
                                            @foreach ($villages as $desa)
                                                <option value="{{ $desa->name}}">{{$desa->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('desa') <span class="text-danger">{{$message}}</span> @enderror                               
                           
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label for="keterangan">Keterangan <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <textarea type="text" class="form-control" id="keterangan" placeholder="isi aduan" name="keterangan"  rows="5"> </textarea>
                                        </div>                                    
                                    </div><!--end form-group--> 

                                    <div class="form-group">
                                        <label for="idLokasi">Masukan Gambar jika ada </label>
                                        <div class="input-group mb-3">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Jenis Ternak <span class="text-danger">*</span></label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                        <option selected="">Pilih Hewan Ternak</option>
                                        <option>Sapi</option>
                                        <option>Kambing</option>
                                        <option>Unggas</option>
                                        <option>Ayam</option>
                                        <option>Kuda</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-0 row">
                                        <div class="col-12 mt-2">
                                            <a href="{{ route('generate-code-report.user')}}">
                                                <button class="btn btn-success btn-round btn-block waves-effect waves-light">Kirim <i class="fas fa-sign-in-alt ml-1"></i></button>
                                            </a>
                                        </div><!--end col--> 
                                    </div> <!--end form-group-->                           
                                </form><!--end form-->
    
                            </div><!--end /div-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end auth-page-->
            </div><!--end col-->           
        </div><!--end row-->
    </div>

</div>

@include('layouts.partials.footer')

<<<<<<< HEAD

    <!-- Modal -->
    <div class="modal fade" id="modalMd1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ID</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            {{-- @foreach ($pengaduans as $pengaduan)
            <h4 class="text-center">{{ $pengaduan->$idPengaduan}}</h4>
            @endforeach --}}
            <p class="text-center mt-3">Berikut  adalah ID anda untuk memeriksa Status pengiriman laporan pengaduan
                (Harap Screenshot/Tangkap Layar,untuk mengingat ID.)</p>
            <h3 class="text-center px-2">A01</h3>
          </div>
          <div class="form-group mb-0 row">
            <div class="col-12 mt-2">
                <button class="btn btn-success btn-round btn-block waves-effect waves-light" action="">Cek status <i class="fas fa-sign-in-alt ml-1"></i></button>
            </div><!--end col--> 
        </div> <!--end form-group-->
        </div>
      </div>
    </div>

=======
>>>>>>> 71b510d3459cb5e4f3b997acce90f1eca87c149d
@endsection

{{-- <script>
    $(function(){
        $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr(content)},
        });
        
        $(function(){
            $('#provinsi').on('change', function(){
                let id_provinsi = $('#provinsi').val();
                
                $.ajax({
                    type: "POST",
                    url: "{{ route('getKabupaten') }}",
                    data: "{id_provinsi:id_provinsi}",
                    cache: false,

                    success: function(msg){
                        $('#kabupaten').html(msg);
                        $('#kecamatan').html('');
                        $('#desa').html('');
                    },

                    error: function(data){
                        console.log('error',data);
                    }

                });


            });
        });
    });
</script> --}}
    