@extends('...public.main')

@section("title_content", "Data Pasien")

@section("page_title" , "Data Pasien")

@section("breadcrumb")
<ol class="breadcrumb">
    <li class="breadcrumb-item ">
        Home
    </li>
    <li class="breadcrumb-item ">
        <a href="{{ url('/dokter/datapasien') }}">
            Data Pasien
        </a>
    </li>
    <li class="breadcrumb-item active">
        Detail Pasien
    </li>
</ol>
@endsection

@section('content')

@php
use Carbon\Carbon;    
@endphp

<section class="section dashboard">
    <div class="row">
        <div class="col-6">
            
            <div class="card">
                <div class="card-header">Detail Pasien</div>
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th style="text-align: left;width: 170px;">NIK</th>
                                <td style="text-align: left">{{ $pasien->nik }}</td>
                            </tr>
                            <tr>
                                <th style="text-align: left">NO. TELEPON</th>
                                <td style="text-align: left">{{ $pasien->nomer_telepon }}</td>
                            </tr>
                            <tr>
                                <th scope="row">NAMA</th>
                                <td>{{ $pasien->nama }}</td>
                            </tr>
                            <tr>
                                <th scope="row">JENIS KELAMIN</th>
                                <td>
                                    @if ($pasien->jenis_kelamin == "L")
                                    Laki - Laki    
                                    @elseif($pasien->jenis_kelamin == "P")
                                    Perempuan
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">ALAMAT</th>
                                <td>{{ $pasien->alamat }}</td>
                            </tr>
                            <tr>
                                <th scope="row">TANGGAL LAHIR</th>
                                <td>{{ Carbon::createFromFormat("Y-m-d", $pasien->tanggal_lahir)->isoFormat('D MMMM Y') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
        
        <div class="col-6">
            <div class="card recent-sales overflow-auto">
                
                
                
                <div class="card-body">
                    <h5 class="card-title">Rekam Medis <span>| {{ $pasien->nama }}</span></h5>
                    
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">Tanggal Antrian</th>
                                <th scope="col">Keluhan</th>
                                <th scope="col">Diagnosa</th>
                                <th scope="col">Dosis Obat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($antrian as $item)
                            <tr>
                                <td>{{ Carbon::createFromFormat("Y-m-d", $item->tanggal_antrian)->isoFormat('D MMMM Y') }}</td>
                                <td>{{ $item->keluhan->keluhan }}</td>
                                <td>
                                    @if (empty($item->keluhan->diagnosa))
                                        -
                                    @else
                                        {{ $item->keluhan->diagnosa }}
                                    @endif
                                </td>
                                <td>
                                    @if (empty($item->keluhan->dosis_obat))
                                        -
                                    @else
                                        {{ $item->keluhan->dosis_obat }}
                                    @endif
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
                
            </div>
            
        </div>
    </div>

    
</section>


@endsection

