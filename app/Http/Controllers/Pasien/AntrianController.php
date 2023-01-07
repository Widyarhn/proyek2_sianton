<?php

namespace App\Http\Controllers\Pasien;

use App\Http\Controllers\Controller;
use App\Models\Antrian;
use App\Models\Pasien;
use App\Models\Pasien\Keluhan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
// use PDF;
class AntrianController extends Controller
{
    public function index(Request $request)
    {
        $nomer = 0;
        
        $cek = Antrian::first();
        
        if (empty($cek)) {
            $nomer = 1;
        } else {
            $deteksi = Antrian::where("tanggal_antrian", date("Y-m-d"))->first();

            if (empty($deteksi)) {
                $nomer = 1;
            } else {
                $i = 0;
            $data = Antrian::get();
            
            $awal = 0;
            
            foreach ($data as $d) {
                if ($d->no_antrian > $awal) {
                    $cetak = $d->no_antrian;
                }
            }

            $nomer = $cetak + 1;
            }

        }

        $cek_pasien = Pasien::where("nik", $request->nik)
            ->orWhere("nama", $request->nama)
            ->first();

        if (empty($cek_pasien)) {
            $pasien = Pasien::create([
                "nik" => $request->nik,
                "nama" => $request->nama,
                "jenis_kelamin" => $request->jenis_kelamin,
                "alamat" => $request->alamat,
                "tanggal_lahir" => $request->tanggal_lahir,
                "nomer_telepon" => $request->nomer_telepon
            ]);
        } else {
            
        }
        
        $antrian = Antrian::create([
            "no_antrian" => $nomer,
            "nik" => $request->nik,
            "tanggal_antrian" => date("Y-m-d"),
            "jam_pendaftaran" => date("H:i:s")
        ]);
        
        Keluhan::create([
            "antrian_id" => $antrian->id_antrian,
            "keluhan" => $request->keluhan,
            "tanggal_dibuat" => date("Y-m-d")
        ]);
        
        $data = Antrian::where('no_antrian', $antrian->no_antrian)
                        ->where("tanggal_antrian", date("Y-m-d"))->first();
        
        // return view('pasien.download_data', compact('data'));
        // die();
        $pdf = Pdf::loadView("pasien.download_data", ["data" => $data])->setPaper("a4");
        
        return $pdf->download("Antrian-Sianton-". "ANT-" . $nomer .".pdf");
    }
    public function verifikasi_antrian(Request $request, $id_antrian){
        
        Keluhan::where("antrian_id", $id_antrian)->update([
            "dosis_obat" => $request->dosis_obat,
            "diagnosa" => $request->diagnosa,
            "status" => 1
        ]);
        

        return redirect("/dokter/verifikasi")->with('success','Verifikasi berhasil!');
        
    }
}
