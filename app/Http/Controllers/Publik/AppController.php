<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use App\Models\Antrian;
use App\Models\Pasien\Keluhan;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function dashboard_admin()
    {
        return view("admin.home");
    }
    public function dashboard_dokter()
    {
        return view("dokter.home");
    }
    public function verifikasi_antrian()
    {
        $data["antrian"] = Antrian::where("tanggal_antrian", date("Y-m-d"))->get();
        return view("dokter.antrian.index", $data);
    }

    
}
