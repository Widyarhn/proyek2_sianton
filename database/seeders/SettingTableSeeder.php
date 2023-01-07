<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting')->insert(
            array(
                [
                    "idSetting" => "1",
                    "nama_dokter" => "dr.Iyan Rakhmawati",
                    "tentang" => "Ini adalah website antrian online",
                    "lokasi" => "Disini",
                    "email" => "sianton@gmail.com",
                    "nomer_telepon" => "089123456789",
                    "created_at" => now(),
                    "updated_at" => now()
                ]));
    }
}
