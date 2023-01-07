<?php

use App\Http\Controllers\Account\Dokter\DokterController;
use App\Http\Controllers\Account\Admin\AdministratorController;
use App\Http\Controllers\Dokter\DataPasienController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JadwalPraktikController;
use App\Http\Controllers\Pasien\AntrianController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Account\Admin\ProfilController;
use App\Http\Controllers\Account\Dokter\ProfilDokterController;
use App\Http\Controllers\Publik\AppController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\LaporanController;




Route::get('/', [HomeController::class, 'index']);

Route::group(['middleware' => ['guest']], function() {
    Route::get('/login', [LoginController::class, 'index'])->name('login'); 
    Route::post('/login', [LoginController::class, 'authenticate']);
});

Route::post("/pasien/antrian", [AntrianController::class, "index"]);

Route::get("/search_data", [HomeController::class, "search"]);

Route::get("/contoh_template", function () {
    return view("pasien.download_data");
});


Route::group(["middleware" => ["autentikasi"]], function() {

    Route::group(["middleware" => ["can:admin"]], function() {
        Route::prefix("admin")->group(function () {

            Route::get("/dashboard", [AppController::class, "dashboard_admin"])->name('admin');

            // INDEX, CREATE, STORE, EDIT, UPDATE, DESTROY, SHOW
            Route::resource('/users/dokter', DokterController::class);
            Route::resource('/users/admin', AdministratorController::class);
            Route::resource('/jadwalpraktik', JadwalPraktikController::class);
            Route::resource('/setting', SettingController::class);
            Route::resource('/profil', ProfilController::class);
            Route::put("/profil/{id}/change_password", [ProfilController::class, "change_password"]);
            
        });
    });

    Route::group(["middleware" => ["can:dokter"]], function() {
        Route::prefix("dokter")->group(function () {

            Route::get("/dashboard", [AppController::class, "dashboard_dokter"])->name('dokter');

            Route::get("/verifikasi", [AppController::class, "verifikasi_antrian"]);
            Route::put("/verifikasi/{id_antrian}", [AntrianController::class, "verifikasi_antrian"]);
            
            Route::resource("/keluhanpasien", KeluhanController::class);
            Route::resource("/datapasien", DataPasienController::class);
            
            Route::get('/laporan/cetak_pdf', [LaporanController::class, 'cetak_pdf']);
            Route::resource("/laporan", LaporanController::class);
            

            Route::resource('/profil', ProfilDokterController::class);
            Route::put("/profil/{id}/change_password", [ProfilDokterController::class, "change_password"]);

        });

    });

    Route::get("/logout", [LoginController::class, 'logout']);

});

Route::get('/adminn', function () {
    return view('/admin.home');
})->middleware('auth');

Route::get('/dokter', function () {
    return view('/dokter.home');
})->middleware('auth');

// Route::get('/dashboardd', function () {
//     $judul = 'ADMIN SIANTON';
//     $title = 'Dashboard';
//     $slug = 'dashboardd';
//     return view('/admin.home', compact('title', 'judul', 'slug'));
// })->middleware('auth');