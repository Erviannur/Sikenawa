
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand text-dark" href="{{ route('home.user')}}">
        <img src="{{ asset('assets/images/logo/logo.png')}}" width="50px"  alt="Logo"> <b> SIKENAWA </b>
    </a> <!-- Logo -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="toggler-icon"></span>
        <span class="toggler-icon"></span>
        <span class="toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="page-scroll" href="{{ route('home.user')}}">Home</a></li>
            <li class="nav-item"><a class="page-scroll" href="{{ route('pengaduan.create') }}">Pengaduan</a></li>
            <li class="nav-item"><a class="page-scroll" href="{{ route('generateId.user')}}">Status</a></li>
            <li class="nav-item"><a class="page-scroll" href="{{ route('outlet_map.index') }}">Peta Penyakit</a></li>
        </ul>
        <div class="m-lauto">
            <a href="{{ route('login') }}">
                <div class="btn btn-success btn-sm"> Admin</div>
            </a>
            {{-- <div class="btn btn-primary btn-sm modalMd" data-toggle="modal" data-target="#modalMd">Pusat Bantuan</div> --}}
            
        </div>
    </div> <!-- navbar collapse -->
</nav> <!-- navbar -->


    
