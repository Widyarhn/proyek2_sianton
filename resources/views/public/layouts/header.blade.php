<div class="d-flex align-items-center justify-content-center">
    <a href="index.html" class="logo d-flex align-items-center justify-content-center">
        <img src="{{ asset('admin') }}/assets/img/logo_sianton.png" alt="" style="max-height: 35px">
        {{-- <span class="d-none d-lg-block">SIANTON</span> --}}
    </a>
    <i class="bi bi-list toggle-sidebar-btn" style="color: #ffffff;"></i>
</div><!-- End Logo -->

<nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">
        
        {{-- <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle " href="#">
                <i class="bi bi-search"></i>
            </a>
        </li><!-- End Search Icon--> --}}
        @auth
        <li class="nav-item dropdown pe-3">
            
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                @if (empty(Auth::user()->gambar)) 
                    <img src="{{ url('/admin/assets/img/default_gambar.png') }}" alt="Profile" class="rounded-circle" style="width: 38px; height: 120px; border-radius: 50%">
                @else
                    <img src="{{ url('/storage/'.Auth::user()->gambar) }}" alt="Profile" class="rounded-circle" style="width: 38px; height: 100px; border-radius: 40%">
                @endif
                <span class="d-none d-md-block dropdown-toggle ps-2" style="color: #ffffff;">{{ auth()->user()->nama }}</span>
            </a><!-- End Profile Iamge Icon -->
            
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                    <h6>{{ auth()->user()->nama }}</h6>
                    @if (Auth::user()->level == 1)
                        <span>Admin</span>        
                    @else
                        <span>Dokter</span>
                    @endif
                    
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                
                <li>
                    @if (Auth::user()->level == 1)
                    <a class="dropdown-item d-flex align-items-center" href="{{ url('/admin/profil') }}">
                        <i class="bi bi-person"></i>
                        <span>My Profile</span>
                    </a>     
                    @else
                    <a class="dropdown-item d-flex align-items-center" href="{{ url('/dokter/profil') }}">
                        <i class="bi bi-person"></i>
                        <span>My Profile</span>
                    </a>
                    @endif
                    
                </li>
                
                <li>
                    <hr class="dropdown-divider">
                </li>
                
                <li>
                    <a href="{{ url('/logout') }}">
                        <button type="submit" class="dropdown-item d-flex align-items-center">
                            <i class="bi bi-box-arrow-right"></i>
                            Keluar
                        </button>
                    </a>
                    
                </li>
                
            </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->
        @else 
        
        @endauth
    </ul>
</nav><!-- End Icons Navigation -->
