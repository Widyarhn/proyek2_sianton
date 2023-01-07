<?php

namespace Database\Seeders\Account;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                "nama" => "Administrator",
                "email" => "admin@gmail.com",
                "nomer_telepon" => "29092002",
                "jenis_kelamin" => "L",
                "password" => bcrypt("password"),
                "alamat" => "Jakarta",
                "level" => "1"
            ]);
    }
}
