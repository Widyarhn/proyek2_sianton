@extends('...public.main')

@section("title_content", "Laporan")

@section("page_title" , "Laporan")

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
            Laporan
        </li>
    </ol>
@endsection
@section('content')
    <section class="section dashboard">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <div class="text-left">
                        <a class="btn btn-primary" href="{{ url('/dokter/laporan/cetak_pdf') }}" target="_blank">Cetak</a>
                    </div>
                    {{-- <br>
                    <div class="row mb-10">
                        <label for="inputDate" class="col-sm-1 col-form-label">Date</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-sm-3">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-sm-3">
                            <button type="selesai" class="btn btn-secondary" >filter</button>
                        </div>
                    </div> --}}
                    <br>
                    <!-- Table with stripped rows -->
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align: center">No</th>
                                <th scope="col" style="text-align: center">NIK</th>
                                <th scope="col" style="text-align: center">Nama Pasien</th>
                                <th scope="col" style="text-align: center">Jenis Kelamin</th>
                                <th scope="col" style="text-align: center">Keluhan</th>
                                <th scope="col" style="text-align: center">Diagnosa</th>
                                <th scope="col" style="text-align: center">Dosis Obat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($antrian as $d)
                            @if ($d->keluhan->status==1)
                            <tr>
                                <td scope="row" style="text-align: center">{{ $loop->iteration }}.</td>
                                <td>{{ $d->nik }}</td>
                                <td>{{ $d->pasien->nama }}</td>
                                <td style="text-align: center">{{ $d->pasien->jenis_kelamin }}</td>
                                <td>{{ $d->keluhan->keluhan }}</td>
                                <td>{{ $d->keluhan->diagnosa }}</td>
                                <td>{{ $d->keluhan->dosis_obat }}</td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                    
                </div>
            </div>
        </div> 
    </section>
@endsection