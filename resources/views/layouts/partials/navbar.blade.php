
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand text-dark" href="">
        <img src="{{ asset('assets/images/logo/logo.jpeg')}}" width="50px"  alt="Logo"> <b> SIKENAWA </b>
    </a> <!-- Logo -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="toggler-icon"></span>
        <span class="toggler-icon"></span>
        <span class="toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="page-scroll" href="{{ route('home.user')}}">Home</a></li>
            <li class="nav-item"><a class="page-scroll" href="{{ route('complaint.user') }}">Pengaduan</a></li>
            <li class="nav-item"><a class="page-scroll" href="{{ route('generateId.user')}}">Status</a></li>
            <li class="nav-item"><a class="page-scroll" href="{{ route('disease-map.user')}}">Peta Penyakit</a></li>
        </ul>
        <div class="m-lauto">
            <a href="{{ route('signin')}}">
                <div class="btn btn-success btn-sm"> Masuk</div>
            </a>
            <div class="btn btn-primary btn-sm modalMd" data-toggle="modal" data-target="#modalMd">Pusat Bantuan</div>
            
        </div>
    </div> <!-- navbar collapse -->
</nav> <!-- navbar -->

