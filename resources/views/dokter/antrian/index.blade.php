@extends('...public.main')

@section("title_content", "Verifikasi Antrian")

@section("page_title" , "Verifikasi Antrian")

@section("component_css")

<link src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link src="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">

@endsection

@section("breadcrumb")
<ol class="breadcrumb">
    <li class="breadcrumb-item ">
        Home
    </li>
    <li class="breadcrumb-item active">
        Verifikasi Antrian
    </li>
    <li class="breadcrumb-item">
        <a href="{{ url('/dokter/keluhanpasien') }}">Keluhan Pasien</a>  
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
                
                <div class="card-body">
                    <br>
                    <!-- Table with stripped rows -->
                    <table class="table table-striped table-bordered"  style="margin-top: 16px;" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align: center">No</th>
                                <th scope="col" style="text-align: center">No Antrian</th>
                                <th scope="col" style="text-align: center">Nama</th>
                                <th scope="col" style="text-align: center">Tanggal Antrian</th>
                                <th scope="col" style="text-align: center">Jenis Kelamin</th>
                                <th scope="col" style="text-align: center">Verifikasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 0
                            @endphp
                            @foreach($antrian as $data)
                            @if ($data->keluhan->status==0)
                            <tr>
                                <td scope="row" style="text-align: center">{{ ++$no }}</td>
                                <td>ANT-0{{ $data->no_antrian}}</td>
                                <td>{{ $data->pasien->nama }}</td>
                                <td>{{ $data->tanggal_antrian}}</td>
                                <td>{{ $data->pasien->jenis_kelamin == "P"? 'Perempuan' : 'Laki-laki' }}</td>
                                <td style="text-align: center">
                                    {{-- <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-x-square-fill" ></i>
                                    </button> --}}
                                    <button type="button" class="bi bi-check-square-fill btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $data->id_antrian }}" href="{{ url("/dokter/verifikasi/" . $data->id_antrian . '/edit') }}">
                                    </button>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    @foreach ($antrian as $item)
    <div class="modal fade" id="exampleModal-{{ $item->id_antrian }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Verifikasi Data
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('/dokter/verifikasi/'.$item->id_antrian) }}" method="POST" id="formulir">
                    @method("PUT")
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mb-2">
                            <label for="nik"> NIK </label>
                            <input type="text" class="form-control" name="nik" id="nik" placeholder="Masukkan NIK" value="{{ $item->pasien->nik }}" readonly>
                        </div>
                        <div class="form-group mb-2">
                            <label for="nama"> Nama </label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" value="{{ $item->pasien->nama }}" readonly>
                        </div>
                        <div class="form-group mb-2">
                            <label for="keluhan"> Keluhan </label>
                            <input type="text" class="form-control" name="keluhan" id="keluhan" placeholder="Masukkan Keluhan" value="{{ $item->keluhan->keluhan }}" readonly>
                        </div>
                        <div class="form-group mb-2">
                            <label for="diagnosa"> Diagnosa </label>
                            <input type="text" class="form-control" name="diagnosa" id="diagnosa" placeholder="Masukkan Diagnosa" value="{{ $item->keluhan->diagnosa }}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="dosis_obat"> Dosis Obat </label>
                            <input type="text" class="form-control" name="dosis_obat" id="dosis_obat" placeholder="Masukkan Dosis Obat" value="{{ $item->keluhan->dosis_obat }}" >
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger btn-sm">Kembali</button>
                        <button type="submit" class="btn btn-primary btn-sm">Selesai</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</section>

@endsection
@section("component_js")

<script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(document).ready( function () {
        $('#myTable').DataTable();
    });
</script>
@endsection


<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

<script>
    $("#formulir-keluhanpasien-data").validate({
        rules: {
            diagnosa:"required",
            dosis_obat:"required"
        },
        messages: {
            
            diagnosa: "<span class='teks-span'> Diagnosa Tidak Boleh Kosong </span>",
            dosis_obat: "<span class='teks-span'> Dosis Obat Tidak Boleh Kosong </span>"
        },
        errorElement: "span"
    });

    
</script>