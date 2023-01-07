<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Pasien;
use App\Models\Pasien\Keluhan;
use Illuminate\Http\Request;

class KeluhanController extends Controller
{
    public function index()
    {
        $data["antrian"] = Antrian::orderBy('tanggal_antrian', 'desc')->get();
        return view("dokter.keluhanpasien.index", $data);
    }

    public function update(Request $request, $id_antrian){
        Keluhan::where("antrian_id", $id_antrian)->update([
            
            "diagnosa" => $request->diagnosa,
            "dosis_obat" => $request->dosis_obat,
            "status" => 1

        ]);

        
        return redirect("/dokter/keluhanpasien")->with('success','Data berhasil diperbaharui!');
    }

    public function show($nik)
    {
        $data = [
            
            "pasien" => Pasien::where('nik', $nik)->first(),
            "antrian" => Antrian::where('nik', $nik)->get()
            
        ];
        return view('dokter.keluhanpasien.detail',$data);
    }
    public function destroy($id_antrian)
    {
        // Pasien::where("nik", $nik)->delete();
        // Keluhan::where("antrian_id", $nik)->delete();

        Keluhan::where("antrian_id", $id_antrian)->update([
            "deleted_at" => date("Y-m-d H:i:s")
        ]);

        $data = Antrian::findOrFail($id_antrian);
        $data->delete();
        
    
        return redirect("/dokter/keluhanpasien")->with('success','Data berhasil dihapus');
    }
}
