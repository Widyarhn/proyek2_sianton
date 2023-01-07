@extends("...public.main")

@section("title_content", "Dashboard Dokter") 

@section("page_title" , "Dashboard")

@section("breadcrumb")
    <ol class="breadcrumb">
        <li class="breadcrumb-item ">
            Home
        </li>
        <li class="breadcrumb-item active">
            Dashboard
        </li>
    </ol>
@endsection

@section('content')
    <section class="section dashboard">
        <div class="row" style="justify-content: center">
            <div class="col-lg-8">
                <div class="row">
                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-12">
                        <div class="card info-card sales-card" style="height: 70px;margin-top: 20px;">
                            
                            <div class="card-body">
                                <h5 class="card-title d-block text-center">Selamat Datang {{ auth()->user()->nama }}!</h5>
                            </div>
                            
                        </div>
                    </div><!-- End Sales Card -->
                    <!-- Sales Card -->
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    
                    <div class="col-xxl-3 col-md-4">
                        <div class="card info-card sales-card">
                            <a href="{{ url('/dokter/verifikasi') }}">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    
                                    
                                    
                                    <div class="d-flex align-items-center">
                                        
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-card-checklist"></i>
                                        </div>
                                        <div class="ps-2">
                                            <h6>Antrian</h6>
                                        </div>
                                    </div>
                                    
                                </div>
                            </a>
                        </div>
                    </div><!-- End Sales Card -->
                    
                        
                        
                    <!-- Sales Card -->
                    <div class="col-xxl-3 col-md-4">
                        <div class="card info-card sales-card">
                            <a href="{{ url('/dokter/datapasien') }}">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                        
                                        
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-file-earmark-person"></i>
                                        </div>
                                        <div class="ps-2">
                                            <h6>Data Pasien</h6>    
                                        </div>
                                    </div>
                                </div>
                            </a>
                                
                        </div>
                    </div><!-- End Sales Card -->
                        
                    <!-- Revenue Card -->
                    <div class="col-xxl-3 col-md-4">
                        <!-- <div class="card info-card revenue-card"> -->
                        <div class="card info-card sales-card">
                            <a href="{{ url('/dokter/laporan') }}">    
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                            
                                            
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-folder"></i>
                                        </div>
                                        <div class="ps-2">
                                            <h6>Laporan</h6>  
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div><!-- End Revenue Card -->
                            
                </div>
            </div>
            
    </section>
    
@endsection