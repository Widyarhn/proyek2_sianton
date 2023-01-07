@php
use Carbon\Carbon;    
use App\Models\Antrian;
@endphp

<style>
    span .teks-span {
        color: red;
        font-size: 12px;
    }
</style>

<div class="container" data-aos="fade-up">
    <div class="section-title">
        <h2>Daftar Antrian</h2>
    </div>
    
    <div class="row">
        
        <div class="col-md-12 mb-5">
            <div class="card">
                <form action="{{ url('/search_data') }}" method="GET">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10 mb-2">
                                <input type="text" name="cari" class="form-control" placeholder="Cari Berdasaran NIK / Nama..." autofocus>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary" style="width: 100%;">
                                    Cari
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="col-md-12 mb-5">
            <div class="card">
                <div class="card-body">
                    @if (empty($cari_data))
                    <div class="alert alert-info text-center">
                        <strong>
                            <i>
                                Silahkan Cari Data Anda Terlebih Dahulu
                            </i>
                        </strong>
                    </div>
                    @else
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th class="text-center">Jenis Kelamin</th>
                                    <th class="text-center">Tanggal Lahir</th>
                                    
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($cari_data as $item)
                                <tr>
                                    <td>{{ $item->nama }}</td>
                                    <td class="text-center">
                                        @if ($item->jenis_kelamin == "L")
                                        Laki - Laki    
                                        @elseif($item->jenis_kelamin == "P")
                                        Perempuan
                                        @endif
                                    </td>
                                    <td class="text-center">{{ Carbon::createFromFormat("Y-m-d", $item->tanggal_lahir)->isoFormat('D MMMM Y') }}</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalCari-{{ $item->nik }}">
                                            Tambah Keluhan
                                        </button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7">
                                        <div class="bg-secondary p-2">
                                            <span class="text-danger text-white">
                                                Maaf, Data Anda Tidak Ditemukan
                                            </span>
                                        </div>
                                        <br>
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Silahkan Tambah Data 
                                        </button>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        
        
    </div>
    
    {{-- antrian --}}
    
    <div class="row" style="justify-content: center">
        
        <div class="col-md-4">
            <div class="info">
                <div class="address text-center">
                    
                    <div style="text-align: center; font-size: 30px; color: rgba(40, 58, 90, 0.9);">
                        {{-- <i class="bbi bi-person-lines-fill"></i><i class="bi bi-people-fill"></i> --}}
                        <h4 style="padding-left: 0px;">Antrian Saat Ini</h4>
                        <h1 style="margin-bottom: 0px; margin-top: 10px;">
                            {{  empty($tampung) ? "0" : "ANT-". $tampung  }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="info">
                <div class="address text-center">
                    
                    <div style="text-align: center; font-size: 30px; color: rgba(40, 58, 90, 0.9);">
                        {{-- <i class="bbi bi-person-lines-fill"></i><i class="bi bi-people-fill"></i> --}}
                        <h4 style="padding-left: 0px;">Jumlah Antrian</h4>
                        <h1 style="margin-bottom: 0px; margin-top: 10px;">
                            {{ $antrian }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
    
</div>

<!-- Tambah Data -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    Tambah Data
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/pasien/antrian') }}" method="POST" id="formulir-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label for="nik"> NIK </label>
                        <input type="text" class="form-control" name="nik" id="nik" placeholder="Masukkan NIK">
                    </div>
                    <div class="form-group mb-2">
                        <label for="nama"> Nama </label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jenis_kelamin"> Jenis Kelamin </label>
                                <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                                    <option value="">- Pilih -</option>
                                    <option value="1">Laki - Laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal_lahir"> Tanggal Lahir </label>
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="nomer_telepon"> Nomer Telepon </label>
                        <input type="text" class="form-control" name="nomer_telepon" id="nomer_telepon" placeholder="0">
                    </div>
                    <div class="form-group mb-2">
                        <label for="alamat"> Alamat </label>
                        <textarea name="alamat" class="form-control" id="alamat" rows="5" placeholder="Masukkan Alamat Anda"></textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="keluhan"> Keluhan </label>
                        <textarea name="keluhan" class="form-control" id="keluhan" rows="5" placeholder="Masukkan Keluhan Anda"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger btn-sm">Kembali</button>
                    <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END -->

<!-- Keluhan Data -->

@if (empty($cari_data))

@else
@foreach ($cari_data as $item)
<div class="modal fade" id="exampleModalCari-{{ $item->nik }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    Tambah Data
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/pasien/antrian') }}" method="POST" id="formulir-tambah-keluhan-data">
                @csrf
                <div class="modal-body">
                    {{-- <div class="form-group mb-2">
                        <label for="nik"> NIK </label>
                        <input type="text" class="form-control" name="nik" id="nik" placeholder="Masukkan NIK" value="{{ $item->nik }}" readonly>
                    </div> --}}
                    <div class="form-group mb-2">
                        <label for="nama"> Nama </label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" value="{{ $item->nama }}" readonly>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jenis_kelamin"> Jenis Kelamin </label>
                                <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="Masukkan Jenis Kelamin" value="{{ $item->jenis_kelamin == "L"? 'Laki - Laki' : 'Perempuan' }}" readonly>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal_lahir"> Tanggal Lahir </label>
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{ $item->tanggal_lahir }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="nomer_telepon"> Nomer Telepon </label>
                        <input type="text" class="form-control" name="nomer_telepon" id="nomer_telepon" placeholder="0" value="{{ $item->nomer_telepon }}" readonly>
                    </div>
                    <div class="form-group mb-2">
                        <label for="alamat"> Alamat </label>
                        <textarea name="alamat" class="form-control" id="alamat" rows="5" placeholder="Masukkan Alamat Anda" readonly>{{ $item->alamat }}</textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="keluhan"> Keluhan </label>
                        <textarea name="keluhan" class="form-control" id="keluhan" rows="5" placeholder="Masukkan Keluhan Anda"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger btn-sm">Kembali</button>
                    <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endif

<!-- END -->
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

<script>
    $("#formulir-data").validate({
        rules: {
            nik: 
            {
                required: true,
                number: true,
                minlength: 16,
                maxlength: 16
            },
            nama: "required",
            jenis_kelamin: "required",
            tanggal_lahir: "required",
            nomer_telepon: {
                required: true,
                number: true,
                minlength: 12,
                maxlength: 14
            },
            alamat: "required",
            keluhan: "required"

        },
        messages: {
            nik: 
            {
                required: "<span class='teks-span'> NIK Tidak Boleh Kosong </span>",
                number: "<span class='teks-span'> NIK Harus menggunakan Angka </span>",
                minlength: "<span class='teks-span'> NIK Kurang dari 16 Angka</span>",
                maxlength: "<span class='teks-span'> NIK Tidak boleh Lebih dari 16 Angka</span>"
            },
            nama: "<span class='teks-span'> Nama Tidak Boleh Kosong </span>",
            jenis_kelamin: "<span class='teks-span'> Jenis Kelamin Tidak Boleh Kosong </span>",
            tanggal_lahir: "<span class='teks-span'> Tanggal Lahir Tidak Boleh Kosong </span>",
            nomer_telepon:
            {
                required: "<span class='teks-span'> Nomor Telepon Tidak Boleh Kosong </span>",
                number: "<span class='teks-span'> Nomor Telepon Harus menggunakan Angka </span>",
                minlength: "<span class='teks-span'> Nomor Telepon Kurang dari 12 Angka</span>",
                maxlength: "<span class='teks-span'> Nomor Telepon Tidak boleh Lebih dari 14 Angka</span>"
            },
            alamat: "<span class='teks-span'> Alamat Tidak Boleh Kosong </span>",
            keluhan: "<span class='teks-span'> Keluhan Tidak Boleh Kosong </span>"
            
        },
        errorElement: "span"
    });

    $("#formulir-tambah-keluhan-data").validate({
        rules: {
            keluhan: "required"
        },
        messages: {
            keluhan: "<span class='teks-span'> Keluhan Tidak Boleh Kosong </span>"
        },
        errorElement: "span"
    });
</script>