@extends('...public.main')

@section("title_content", "Jadwal Praktik")

@section("page_title" , "Jadwal Praktik")

@section("breadcrumb")
<ol class="breadcrumb">
    <li class="breadcrumb-item ">
        Home
    </li>
    <li class="breadcrumb-item active">
        Jadwal Praktik
    </li>
</ol>
@endsection
@section('content')
<section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (session()->has('updateGagal'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ session('updateGagal') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="card" style="margin-top: 20px;">
                @if (empty($jadwal_praktik))
                <form action="{{ url('/admin/jadwalpraktik') }}" method="POST">
                @else
                    <form action="{{ url('/admin/jadwalpraktik/'.$jadwal_praktik->id) }}" method="POST">
                        @method("PUT")
                @endif
                    @csrf
                    <div class="card-body">
                        <br>
                        <div class="form-group">
                            <textarea name="text" id="editor">{{ empty($jadwal_praktik) ? '' : $jadwal_praktik->text }}</textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="reset" class="btn btn-danger btn-sm">
                            Batal
                        </button>
                        @if (empty($jadwal_praktik))
                        <button type="submit" class="btn btn-primary btn-sm">
                            Tambah
                        </button>
                        @else
                        <button type="submit" class="btn btn-success btn-sm">
                            Simpan
                        </button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@section("component_js")
    
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.1/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create( document.querySelector('#editor'));
</script>

@show