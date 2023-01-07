<ul class="sidebar-nav" id="sidebar-nav">
    
    {{-- 
        sidebar admin 
        //segment (2) -> ex: admin/dashboard
        //segment (3) ->> ex: admin/masterdata(dropdown)/datauser
        
        --}}
        
        @can("admin")
        <li class="nav-item">
            <a class="nav-link {{ Request::segment("2") == "dashboard" ? '' : 'collapsed' }} " href="{{ url('/admin/dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link  {{ Request::segment("2") == "jadwalpraktik" ? '' : 'collapsed' }}" href="{{ url('/admin/jadwalpraktik') }}">
                <i class="bi bi-calendar3"></i>
                <span>Jadwal Praktik</span>
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link {{ Request::segment("2") == "users" ? '' : 'collapsed' }}" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person-plus-fill"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{  url('/admin/users/dokter')  }}" class=" {{ Request::segment("3") == "dokter" ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Dokter</span>
                    </a>
                </li>
                <li>
                    <a href="{{  url('/admin/users/admin')  }}" class="{{ Request::segment("3") == "admin" ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Admin</span>
                    </a>
                </li>
            </ul>
        </li>
        
        <li class="nav-item">
            <a class="nav-link  {{ Request::segment("2") == "setting" ? '' : 'collapsed' }}" href="{{ url('/admin/setting') }}">
                <i class="bi bi-gear"></i>
                <span>Setting</span>
            </a>
        </li>
        @endcan 
        
        {{-- 
            sidebar Dokter 
            //segment (2) -> ex: admin/dashboard
            //segment (3) ->> ex: admin/masterdata(dropdown)/datauser
            
            --}}
            
            @can("dokter")
            <li class="nav-item">
                <a class="nav-link {{ Request::segment("2") == "dashboard" ? '' : 'collapsed' }}" href="{{  url('/dokter/dashboard')  }} ">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link {{ Request::segment("2") == "verifikasi" ? '' : 'collapsed' }} " href="{{  url('/dokter/verifikasi')  }}  ">
                    <i class="bi bi-card-checklist"></i>
                    <span>Verifikasi Antrian</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::segment("2") == "keluhanpasien" ? '' : 'collapsed' }} " href="{{  url('/dokter/keluhanpasien')  }}  ">
                    <i class="bi bi-clipboard2-data"></i>
                    <span>Keluhan Pasien</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link {{ Request::segment("2") == "datapasien" ? '' : 'collapsed' }}" href="{{  url('/dokter/datapasien')  }}  ">
                    <i class="bi bi-file-earmark-person"></i>
                    <span>Data Pasien</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link {{ Request::segment("2") == "laporan" ? '' : 'collapsed' }}" href="{{  url('/dokter/laporan')  }}  ">
                    <i class="bi bi-folder"></i>
                    <span>Laporan</span>
                </a>
            </li>
            @endcan 
        </ul>
        
        
        
        
        
        
        {{-- dropdown
            <li class="nav-item">
                <a class="nav-link collapsed {{ ($slug == 'masterdata') ? 'active' : ''  }}" data-bs-target="#components-nav" data-bs-toggle="collapse" href="/masterdata">
                    <i class="bi bi-menu-button-wide"></i><span>Master Data</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/dataadmin">
                            <i class="bi bi-circle"></i><span>Data Admin</span>
                        </a>
                    </li>
                    <li>
                        <a href="/datadokter">
                            <i class="bi bi-circle"></i><span>Data Dokter</span>
                        </a>
                    </li>
                </ul>
            </li>
            
            
            --}}