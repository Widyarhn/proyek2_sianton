<?php

namespace App\Http\Controllers\Account\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdministratorController extends Controller
{
    public function index()
    {
        $data["user"] = User::where("level", "1")->get();

        return view("admin.users.av_index", $data);
    }

    public function create()
    {
        return view("admin.users.av_create");
    }

    public function store(Request $request)
    {
        if ($request->file("gambar"))
        {
            $data = $request->file("gambar")->store("admin");
        }

        User::create([
            "nama" => $request->nama,
            "email" => $request->email,
            "nomer_telepon" => $request->nomer_telepon,
            "jenis_kelamin" => $request->jenis_kelamin,
            "password" => bcrypt("admin"),
            "alamat" => $request->alamat,
            "gambar" => $data,
            "level" => "1",
            "dibuat_oleh" => Auth::user()->id
        ]);

        return redirect("/admin/users/admin")->with('success','Akun berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data["edit"] = User::where("id", $id)->first();

        return view("admin.users.av_edit", $data);
    }

    public function update(Request $request, $id)
    {
        if ($request->file("gambar")) {
            if ($request->gambar_lama) {
                Storage::delete($request->gambar_lama);
            }

            $data = $request->file("gambar")->store("admin");
        }else{
            $data= $request->gambar_lama;
        }

        User::where("id", $id)->update([
            "nama" => $request->nama,
            "email" => $request->email,
            "nomer_telepon" => $request->nomer_telepon,
            "jenis_kelamin" => $request->jenis_kelamin,
            "alamat" => $request->alamat,
            "gambar" => $data
        ]);

        return redirect("/admin/users/admin")->with('success','Akun anda telah diperbarui');
    }

    public function destroy(Request $request, $id)
    {
        if ($request->gambar_lama) {
            Storage::delete($request->gambar_lama);
        }

        User::where("id", $id)->delete();

        return redirect("/admin/users/admin")->with('success','Akun berhasil dihapus');
    }
}
