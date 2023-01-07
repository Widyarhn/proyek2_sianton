@extends("...public.main")

@section("title_content", "Setting")

@section("page_title" , "Setting")

@section("breadcrumb")
<ol class="breadcrumb">
    <li class="breadcrumb-item ">
        Home
    </li>
    <li class="breadcrumb-item active">
        Setting
    </li>
</ol>
@endsection
@section('content')
<section class="section dashboard">
    <div class="row">
        
        <div class="col-lg-12">
            
            <div class="card" style="margin-top: 20px;">
                <div class="card-body">
                    
                    @if (empty($setting))
                    <h5 class="card-title">Tambah Data</h5>
                    @else
                    <h5 class="card-title">Edit Data</h5>
                    @endif
                    
                    <!-- Horizontal Form -->
                    <div class="card-footer">
                        
                    </div>
                    
                    @if (empty($setting))
                    <form action="{{ url('/admin/setting') }}" method="POST" enctype="multipart/form-data">
                        @else
                        <form action="{{ url('/admin/setting/' . $setting->idSetting) }}" method="POST" enctype="multipart/form-data">
                            @method("PUT")
                            @endif
                            @csrf
                            <input type="hidden" name="gambar_lama" id="gambar_lama" value="{{ $setting->gambar }}">
                            <div>
                                <h6 style="color:rgb(179, 179, 179)">Menu Tentang</h6>
                            </div>
                            <div class="row mb-3">
                                <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-sm-10">
                                    @if (empty($setting->gambar))
                                    <img src="{{ url('/storage/'. $setting->gambar) }}" class="gambar-preview img-fluid">
                                    <br>
                                    <input onchange="previewImage()" type="file" class="form-control" name="gambar" id="gambar">
                                    @else
                                    <img src="{{ url('/storage/'. $setting->gambar) }}" class="img-fluid gambar-preview mb-3">
                                    <input onchange="previewImage()" type="file" class="form-control" name="gambar" id="gambar">
                                    @endif
                                    
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tentang" class="col-sm-2 col-form-label">Tentang</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" style="height: 100px" name="tentang" id="tentang">{{ empty($setting) ? '' : $setting->tentang
                                    }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nama_dokter" class="col-sm-2 col-form-label">Nama Dokter</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" id="nama_dokter" value="{{ empty($setting) ? '' : $setting->nama_dokter}}">
                            
                                </div>
                            </div>
                                <br>
                            <div>
                                <h6 style="color:rgb(179, 179, 179)">Menu Kontak</h6>
                            </div>
                            <div class="row mb-3">
                                <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="lokasi" name="lokasi" id="lokasi" value="{{ empty($setting) ? '' : $setting->lokasi
                                }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="noTelp" class="col-sm-2 col-form-label">No. Telepon</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="noTelp" name="nomer_telepon" value="{{ empty($setting) ? '' : $setting->nomer_telepon
                            }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" value="{{ empty($setting) ? '' : $setting->email
                        }}">
                    </div>
                </div>
                <br>
                <div class="text-left">
                    @if (empty($setting))
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-times"></i> Batal
                    </button>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-plus"></i> Tambah
                    </button>
                    @else
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-times"></i> Kembali
                    </button>
                    <button type="submit" class="btn btn-success btn-sm">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                    @endif
                </div>
                <br>
            </form><!-- End Horizontal Form -->
            
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