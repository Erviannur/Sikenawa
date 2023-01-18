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


                                <form class="form-horizontal auth-form my-4" action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data">
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
                                        <label for="tanggal">Tanggal <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="date" class="form-control" id="tanggal" placeholder="Masukan tanggal" name="tanggal" >
                                        </div>
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label for="provinsi">Provinsi</label>
                                        <select class="form-control @error('provinsi') is-invalid @enderror" id="provinsi"  name="provinsi" required>
                                            <option >Pilih provinsi ..</option>
                                            @foreach ($provinces as $provinsi)
                                                <option value="{{ $provinsi->id}}">{{$provinsi->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('provinsi') <span class="text-danger">{{$message}}</span> @enderror

                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label for="kabupaten">Kabupaten</label>
                                        <select class="form-control @error('kabupaten') is-invalid @enderror" id="kabupaten"  name="kabupaten" required>
                                            <option selected disabled>Pilih kabupaten ..</option>
                                        </select>
                                        @error('kabupaten') <span class="text-danger">{{$message}}</span> @enderror

                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label for="kecamatan">Kecamatan</label>
                                        <select class="form-control @error('kecamatan') is-invalid @enderror" id="kecamatan"  name="kecamatan" required>
                                            <option selected disabled>Pilih kecematan ..</option>
                                        </select>
                                        @error('kecamatan') <span class="text-danger">{{$message}}</span> @enderror

                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label for="desa">Desa</label>
                                        <select class="form-control @error('desa') is-invalid @enderror" id="desa"  name="desa" required>
                                            <option selected disabled>Pilih desa ..</option>
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
                                        <label for="foto">Masukan Gambar jika ada format jpg</label>
                                        <div class="input-group mb-3">
                                            <input type="file" class="custom-file-input" id="foto" name="foto">
                                            <label class="custom-file-label" for="foto">Choose file</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="jenisHewan">Jenis Ternak <span class="text-danger">*</span></label>
                                        <select class="form-control" id="jenisHewan" name="jenisHewan">
                                        <option >Pilih Jenis Ternak ..</option>
                                        @foreach ($jenis_ternak as $hewan)
                                            <option value="{{ $hewan->name}}">{{$hewan->name}}</option>
                                        @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group mb-0 row">
                                        <div class="col-12 mt-2">
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
<script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script>
    $(function () {
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        });

        $('#provinsi').on('change', function () {
            $.ajax({
                type: "POST",
                url: "{{ route('getKabupaten') }}",
                data: { id: $(this).val() },
                success: function (response) {
                    $('#kabupaten').empty();
                    $('#kecamatan').empty();
                    $('#desa').empty();
                    $('#kabupaten').append(
                        '<option disabled selected>Pilih kabupaten ..</option>'
                    )
                    $('#kecamatan').append(
                        '<option disabled selected>Pilih kecamatan ..</option>'
                    )
                    $('#desa').append(
                        '<option disabled selected>Pilih desa ..</option>'
                    )
                    $.each(response, function (id, data) {
                        $('#kabupaten').append(new Option(data.name, data.id))
                    })
                },
                error: function (data) {
                    console.log('error', data);
                }
            });
        });

        $('#kabupaten').on('change', function () {
            $.ajax({
                type: "POST",
                url: "{{ route('getKecamatan') }}",
                data: { id: $(this).val() },
                success: function (response) {
                    $('#kecamatan').empty();
                    $('#desa').empty();
                    $('#kecamatan').append(
                        '<option disabled selected>Pilih kecamatan ..</option>'
                    )
                    $('#desa').append(
                        '<option disabled selected>Pilih desa ..</option>'
                    )
                    $.each(response, function (id, data) {
                        $('#kecamatan').append(new Option(data.name, data.id))
                    })
                },
                error: function (data) {
                    console.log('error', data);
                }
            });
        });

        $('#kecamatan').on('change', function () {
            $.ajax({
                type: "POST",
                url: "{{ route('getDesa') }}",
                data: { id: $(this).val() },
                success: function (response) {
                    $('#desa').empty();
                    $('#desa').append(
                        '<option disabled selected>Pilih desa ..</option>'
                    )
                    $.each(response, function (id, data) {
                        $('#desa').append(new Option(data.name, data.id))
                    })
                },
                error: function (data) {
                    console.log('error', data);
                }
            });
        });
    });
</script>
@endsection
