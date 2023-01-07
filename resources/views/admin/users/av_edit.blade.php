@extends('...public.main')

@section("title_content", "Edit Data")

@section("page_title" , "Edit Data")

@section("component_css")

<link src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link src="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">

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
        Edit Data
    </li>
</ol>
@endsection

@section('content')
<section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">
            
            <div class="card" style="margin-top: 20px;">
                <form action="{{ url('/admin/users/admin/' . $edit->id) }}" method="POST" enctype="multipart/form-data">
                    @method("PUT")
                    @csrf
                    <div class="card-header">
                        Edit Data User
                    </div>
                    <input type="hidden" name="gambar_lama" id="gambar_lama" value="{{ $edit->gambar }}">
                    <div class="card-body pt-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama"> Nama </label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" value="{{ $edit->nama }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Email </label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email" value="{{ $edit->email }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group pt-3">
                                    <label for="nomer_telepon"> Nomer Telepon </label>
                                    <input type="number" class="form-control" name="nomer_telepon" id="nomer_telepon" placeholder="0" min="1" value="{{ $edit->nomer_telepon }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group pt-3">
                                    <label for="jenis_kelamin"> Jenis Kelamin </label>
                                    <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                                        <option value="">- Pilih -</option>
                                        <option value="L" {{ $edit->jenis_kelamin == "L" ? 'selected' : '' }}>Laki - Laki</option>
                                        <option value="P" {{ $edit->jenis_kelamin == "P" ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group pt-3">
                            <label for="alamat"> Alamat </label>
                            <textarea name="alamat" class="form-control" id="alamat" rows="5">{{ $edit->alamat }}</textarea>
                        </div>
                        <div class="form-group pt-3">
                            <label for="gambar"> Gambar </label>
                            <br>
                            <img src="{{ url('/storage/'. $edit->gambar) }}" class="img-fluid gambar-preview mb-3">
                            <input onchange="previewImage()" type="file" class="form-control" name="gambar" id="gambar">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="reset" class="btn btn-danger btn-sm">
                            Kembali
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm">
                            Perbarui
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</section>
@endsection 

@section("component_js")
    
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

@endsection

