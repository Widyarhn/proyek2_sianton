<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        $data["setting"] = Setting::first();
        // $data["syarat_ketentuan"] = SyaratKetentuan::first();
        // $data["edit"] = User::where("idSetting", Auth::user()->id)->first();

        return view("admin.setting.index", $data);
    }

    public function store(Request $request)
    {
        if ($request->file("gambar"))
        {
            $gambar = $request->file("gambar")->store("gambar");
        }

        Setting::create([
            "nama_dokter" => $request->nama_dokter,
            "tentang" => $request->tentang,
            "lokasi" => $request->lokasi,
            "nomer_telepon" => $request->nomer_telepon,
            "email" => $request->email,
            "gambar" => $gambar
        ]);

        return redirect("/admin/setting")->with('success','berhasil diubah');
    }

    public function update(Request $request, $id)
    {
        if ($request->file("gambar")) {
            if ($request->gambar_lama) {
                Storage::delete($request->gambar_lama);
            }

            $gambar = $request->file("gambar")->store("gambar");
        }else{
            $gambar= $request->gambar_lama;
        }

        Setting::where("idSetting", $id)->update([
            "nama_dokter" => $request->nama_dokter,
            "tentang" => $request->tentang,
            "lokasi" => $request->lokasi,
            "nomer_telepon" => $request->nomer_telepon,
            "email" => $request->email,
            "gambar" => $gambar
        ]);

        return redirect("/admin/setting")->with('success',' berhasil diperbarui');
    }
}
