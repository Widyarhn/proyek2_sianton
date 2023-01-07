@extends('...public.main')

@section("title_content", "Data Pasien")

@section("page_title" , "Data Pasien")

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
        Data Pasien
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
                                <th scope="col" style="text-align: center">NIK</th>
                                <th scope="col" style="text-align: center">Nama</th>
                                <th scope="col" style="text-align: center">No. Telp</th>
                                <th scope="col" style="text-align: center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 0
                            @endphp
                            @foreach($pasien as $data)
                            <tr>
                                <td scope="row" style="text-align: center">{{ ++$no }}</td>
                                <td>{{ $data->nik }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->nomer_telepon }}</td>
                                <td style="text-align: center">
                                    
                                    <a href="{{url("/dokter/datapasien/" . $data->nik )}}" class="btn btn-success btn-sm">
                                        Detail
                                    </a>
                                    
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