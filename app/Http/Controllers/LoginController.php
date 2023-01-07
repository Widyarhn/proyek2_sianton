<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    
    public function index()
    {
        return view('autentikasi.v_login');
    }
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        $user = User::where("email", $request->email)->first();

        if ($user) {
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                if ($user->level == "1") {
                    return redirect("/admin/dashboard");
                } else if ($user->level == "2") {
                    return redirect("/dokter/dashboard");
                } else {
                    return back()->with("loginError", "Tidak Ada Akses");
                }
            } else {
                return back()->with("loginError", "Tidak Ada Data");
            }
        } else {
            return back()->with("loginError", "Tidak Ada Akun");
        }
    }
    public function logout(Request $request){
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
        

    }
}
