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
        Schema::create('keluhan_pasien', function (Blueprint $table) {
            $table->id();
            $table->integer("antrian_id");
            $table->text("keluhan");
            $table->text("diagnosa")->nullable();
            $table->text("dosis_obat")->nullable();
            $table->enum("status", [1, 0])->nullable()->default(0);
            $table->date("tanggal_dibuat");
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
        Schema::dropIfExists('keluhan_pasien');
    }
};
