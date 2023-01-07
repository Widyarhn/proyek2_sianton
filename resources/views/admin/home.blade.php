@extends("...public.main")

@section("title_content", "Dashboard Admin")

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
                                <h5 class="card-title d-block text-center">Selamat Datang {{ auth()->user()->nama    }}!</h5>
                            </div>
                            
                        </div>
                    </div><!-- End Sales Card -->
                    <!-- Sales Card -->
                </div>
            </div>
            <div class="col-lg-10">
                <div class="row" style="justify-content: center">
                    
                    <div class="col-xxl-5 col-md-4">
                        <div class="card info-card sales-card">
                            <a href="{{ url('/admin/jadwalpraktik') }}">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    
                                    
                                    
                                    <div class="d-flex align-items-center">
                                        
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-calendar3"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>Jadwal Praktik</h6>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </a>
                        </div>
                    </div><!-- End Sales Card -->
                    
                    <!-- Revenue Card -->
                    <div class="col-xxl-5 col-md-4">
                        <!-- <div class="card info-card revenue-card"> -->
                        <div class="card info-card sales-card">
                            <a href="{{ url('/admin/setting') }}">    
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                            
                                            
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-gear"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>Setting</h6>
                                                    
                                                    
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div><!-- End Revenue Card -->
                </div>
            </div>
            <div class="col-lg-10">
                <div class="row" style="justify-content: center">
                    
                    <div class="col-xxl-5 col-md-4">
                        <div class="card info-card sales-card">
                            <a href="{{ url('/admin/users/dokter') }}">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                        
                                        
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person-plus-fill"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>Data Dokter</h6>
                                                
                                                
                                        </div>
                                    </div>
                                </div>
                            </a>
                                
                        </div>
                    </div>

                    <div class="col-xxl-5 col-md-4">
                        <div class="card info-card sales-card">
                            <a href="{{ url('/admin/users/admin') }}">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                        
                                        
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person-plus-fill"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>Data Admin</h6>
                                                
                                                
                                        </div>
                                    </div>
                                </div>
                            </a>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection