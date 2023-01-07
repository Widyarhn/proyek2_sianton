<?php

namespace App\Http\Controllers;
use App\Models\Jadwalpraktik;

use App\Models\Setting;
use Illuminate\Http\Request;

class JadwalPraktikController extends Controller
{

    public function index()
    {
        $data["jadwal_praktik"] = Jadwalpraktik::first();

        $data["setting"] = Setting::first();
        
        return view("admin.jadwalpraktik.index", $data);
    }

    public function store(Request $request)
    {
        Jadwalpraktik::create($request->all());

        return back()->with('success','Tambah Jadwal Praktik Berhasil!');;
    }

    public function update(Request $request, $id)
    {
        Jadwalpraktik::where("id", $id)->update([
            "text" => $request->text
        ]);

        return redirect("/admin/jadwalpraktik")->with('success','Update jadwal praktik berhasil!');
    }

}
