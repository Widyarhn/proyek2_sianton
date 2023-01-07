<?php

namespace App\Http\Controllers;

use App\Models\Antrian;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\Pasien;
class LaporanController extends Controller
{
    public function index(){
        $data["antrian"] = Antrian::all();
        return view("dokter.laporan.index", $data);                     
    }
    public function cetak_pdf() {
        // retreive all records from db
        $data = Antrian::get();
        $pdf = Pdf::loadView("dokter.pasien_pdf",["data" => $data])->setPaper("a4");

        return $pdf->stream();
        // return $pdf->download("Data Pasien.pdf");
    }
}
