<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antrian', function (Blueprint $table) {
            $table->increments('id_antrian');
            $table->string('no_antrian', 20);
            $table->string("nik", 50);
            $table->date("tanggal_antrian");
            $table->enum("status", ["1", "0"])->default("0");
            $table->time("jam_pendaftaran");
            $table->softDeletes();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antrian');
    }
};
