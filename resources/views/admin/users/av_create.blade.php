@extends('...public.main')

@section("title_content", "Tambah Data")

@section("page_title" , "Tambah Data")

@section("component_css")

<link src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link src="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
<style>
    span .teks-span {
        color: red;
        font-size: 12px;
    }
</style>
@endsection

@section("breadcrumb")
<ol class="breadcrumb">
    <li class="breadcrumb-item ">
        Home
    </li>
    <li class="breadcrumb-item ">
        <a href="{{ url('/admin/users/admin') }}">
            Admin
        </a>
    </li>
    <li class="breadcrumb-item active">
        Tambah Data
    </li>
</ol>
@endsection

@section('content')
<section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">
            
            <div class="card" style="margin-top: 20px;">
                <form action="{{ url('/admin/users/admin') }}" method="POST" enctype="multipart/form-data" id="formulir-admin-data">
                    @csrf
                    <div class="card-header">
                        Tambah Data
                    </div>
                    <div class="card-body pt-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama"> Nama </label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Email </label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group pt-3">
                                    <label for="nomer_telepon"> Nomer Telepon </label>
                                    <input type="number" class="form-control" name="nomer_telepon" id="nomer_telepon" placeholder="0" min="1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group pt-3">
                                    <label for="jenis_kelamin"> Jenis Kelamin </label>
                                    <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                                        <option value="">- Pilih -</option>
                                        <option value="L">Laki - Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group pt-3">
                            <label for="alamat"> Alamat </label>
                            <textarea name="alamat" class="form-control" id="alamat" rows="5"></textarea>
                        </div>
                        <div class="form-group pt-3">
                            <label for="gambar"> Gambar </label>
                            <img class="gambar-preview img-fluid">
                            <br>
                            <input onchange="previewImage()" type="file" class="form-control" name="gambar" id="gambar">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="reset" class="btn btn-danger btn-sm">
                            Kembali
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm">
                            Tambah
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</section>
@endsection 

@section("component_js")
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

<script>
    function previewImage() {
        const image = document.querySelector("#gambar");
        const imgPreview = document.querySelector(".gambar-preview");
        imgPreview.style.display = "block";
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
            $("#tampilGambar").addClass('mb-3');
            $("#tampilGambar").width("100%");
            $("#tampilGambar").height("300");
        }
    }
</script>

{{-- <script>
    $("#formulir-admin-data").validate({
        rules: {
            nama:"required",
            nomer_telepon: {
                required: true,
                number: true,
                minlength: 12,
                maxlength: 14
            },
            jenis_kelamin: "required",
            alamat: "required",
            gambar: "required"
        },

        messages: {
            
            nama: "<span class='teks-span'> Nama Tidak Boleh Kosong </span>",
            nomer_telepon:
            {
                required: "<span class='teks-span'> Nomor Telepon Tidak Boleh Kosong </span>",
                number: "<span class='teks-span'> Nomor Telepon Harus menggunakan Angka </span>",
                minlength: "<span class='teks-span'> Nomor Telepon Kurang dari 12 Angka</span>",
                maxlength: "<span class='teks-span'> Nomor Telepon Tidak boleh Lebih dari 14 Angka</span>"
            },
            jenis_kelamin: "<span class='teks-span'> Jenis Kelamin Tidak Boleh Kosong </span>",
            alamat: "<span class='teks-span'> Alamat Tidak Boleh Kosong </span>",
            gambar: "<span class='teks-span'> Gambar Tidak Boleh Kosong </span>"

        },
        errorElement: "span"
    });

</script> --}}

@endsection