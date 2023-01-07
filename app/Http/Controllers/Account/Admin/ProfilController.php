<?php

namespace App\Http\Controllers\Account\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function index()
    {
        $data["users"] = User::all();
        $data["edit"] = User::where("id", Auth::user()->id)->first();
        
        return view("admin.profil.index", $data);
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

        return redirect("/admin/profil")->with('success','Akun anda telah diperbarui');
    }
    public function change_password(Request $request, $id){

        if($request->renewpassword != $request->newpassword){
            return redirect()->back()->with('success','Konfirmasi password tidak sesuai');
        }

        User::where("id", $id)->update([
            "password" => bcrypt($request->newpassword)

        ]);

        return redirect("/admin/profil")->with('success','Password updated successfully');
    }


}
