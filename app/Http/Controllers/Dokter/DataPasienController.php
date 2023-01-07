<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use App\Models\Antrian;
use App\Models\Pasien;
use App\Models\Pasien\Keluhan;
use Illuminate\Http\Request;

class DataPasienController extends Controller
{
    public function index(){

        $data["pasien"] = Pasien::orderBy('created_at', 'asc')->get();
    
        return view("dokter.datapasien.index", $data);                   
    }


    public function show($nik)
    {
        $data = [
            "pasien" => Pasien::where('nik', $nik)->first(),
            "antrian" => Antrian::where('nik', $nik)->get()
            
        ];
        return view('dokter.datapasien.detail',$data);
    }
    
}
