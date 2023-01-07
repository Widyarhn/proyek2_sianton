<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Jadwalpraktik;
use App\Models\Pasien;
use App\Models\Pasien\Keluhan;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function search(Request $request)
    {
        $data["search"] = $request->cari;
        $data["setting"] = Setting::first();
        $data["pasien"] = Pasien::where("nik", $data["search"])->orWhere("nama", $data["search"])->first();

        $data["cari_data"] = Pasien::where("nik", "LIKE", "%" . $request->cari . "%")
        ->orWhere("nama", "LIKE", "%" . $request->cari . "%")
        ->get();
        
        $data["jadwalpraktik"] = Jadwalpraktik::first();
    
        $data["antrian"] = Keluhan::where("status", "0")->where("tanggal_dibuat", date("Y-m-d"))->count();
        $data["antrian_sekarang"] = Keluhan::where("status", "0")->where("tanggal_dibuat", date("Y-m-d"))->first();

        if(empty($data["antrian_sekarang"])) {
            $data["tampung"] = 0;
        } else {
            $data["tampung"] = $data["antrian_sekarang"]["antrian"]["no_antrian"];
        }
        
        return view("index", $data);
    }

    public function index()
    {
        $data["jadwalpraktik"] = Jadwalpraktik::first();
        $data["setting"] = Setting::first();
    
        $data["antrian"] = Keluhan::where("status", "0")->where("tanggal_dibuat", date("Y-m-d"))->count();
        $data["antrian_sekarang"] = Keluhan::where("status", "0")->where("tanggal_dibuat", date("Y-m-d"))->first();

        if(empty($data["antrian_sekarang"])) {
            $data["tampung"] = 0;
        } else {
            $data["tampung"] = $data["antrian_sekarang"]["antrian"]["no_antrian"];
        }

        return view('index', $data);
    }
}
