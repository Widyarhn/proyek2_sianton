@extends('...public.main')

@section("title_content", "Data Admin")

@section("page_title" , "Data Admin")

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
            Data Admin
        </li>
    </ol>
@endsection

@section('content')
<section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">
            
            <div class="card" style="margin-top: 20px;">
                <div class="card-header">
                    <a href="{{url("/admin/users/admin/create")}}" class="btn btn-primary float-end">
                        Tambah Data
                    </a>
                </div>
                <div class="card-body">
                    <!-- Table with stripped rows -->
                    <table class="table table-striped"  style="margin-top: 16px;" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col" class="text-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($user as $u)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}.</td>
                                <td ><img src="{{ url('/storage/'. $u->gambar) }}" height="40"></td>
                                <td>{{ $u->nama }}</td>
                                <td>{{ $u->email }}</td>
                                <td class="text-center">
                                    {{-- <a href="{{url("/admin/users/admin/" . $u->id . '/edit' )}}" class="btn btn-warning btn-sm">
                                        Edit
                                    </a> --}}
                                    <form action="{{ url('/admin/users/admin/'.$u->id) }}" method="POST" style="display: inline">
                                        @method("DELETE")
                                        @csrf
                                        <input type="hidden" name="gambar_lama" value="{{ $u->gambar }}">
                                        <button onclick="return confirm('Yakin Mau di Hapus ? ')" type="submit" class="btn btn-danger btn-sm">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                    
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
