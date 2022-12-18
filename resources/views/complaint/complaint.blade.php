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
                                        <label for="name">Nama</label>
                                        <div class="input-group mb-3">                                                                                                             
                                            <input type="text" class="form-control" id="name" placeholder="Masukan Nama" name="name" required>
                                        </div>                                    
                                    </div><!--end form-group--> 

                                    <div class="form-group">
                                        <label for="nomer">Nomer Hp</label>
                                        <div class="input-group mb-3">                                                                                                             
                                            <input type="text" class="form-control" id="nomer" placeholder="Masukan Nomer Hp" name="nomer" required>
                                        </div>                                    
                                    </div><!--end form-group--> 

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <div class="input-group mb-3">                                                                                                             
                                            <input type="email" class="form-control" id="email" placeholder="Masukan Email" name="email" required>
                                        </div>                                    
                                    </div><!--end form-group--> 

                                    <div class="form-group">
                                        <label for="tanggal">tanggal</label>
                                        <div class="input-group mb-3">                                                                                                             
                                            <input type="date" class="form-control" id="tanggal" placeholder="Masukan tanggal" name="tanggal" required>
                                        </div>                                    
                                    </div><!--end form-group--> 

                                    <div class="form-group">
                                        <label for="idLokasi">Alamat</label>
                                        <select class="form-control @error('idLokasi') is-invalid @enderror" id="idLokasi"  name="idLokasi">
                                            @foreach ($lokasi as $lokasi)
                                                <option value="{{ $lokasi->idLokasi}}">{{$lokasi->nama_kecamatan}}</option>
                                            @endforeach
                                        </select>
                                        @error('idLokasi') <span class="text-danger">{{$message}}</span> @enderror                               
                           
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label for="keterangan">Keterangan</label>
                                        <div class="input-group mb-3">
                                            <textarea type="text" class="form-control" id="keterangan" placeholder="isi aduan" name="keterangan"  rows="5"> </textarea>
                                        </div>                                    
                                    </div><!--end form-group--> 

                                    <div class="form-group mb-0 row">
                                        <div class="col-12 mt-2">
                                            <button class="btn btn-success btn-round btn-block waves-effect waves-light" type="submit">Kirim <i class="fas fa-sign-in-alt ml-1"></i></button>
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

@endsection
    