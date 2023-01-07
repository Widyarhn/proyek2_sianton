<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Antrian extends Model
{
    use HasFactory, SoftDeletes;
    public $table = "antrian";

    protected $guarded = [''];
    public $primaryKey = "id_antrian";
    public $timestamps = false;

    public function pasien()
    {
        return $this->belongsTo("App\Models\Pasien", "nik", "nik");
    }
    public function keluhan(){
        return $this->belongsTo("App\Models\Pasien\Keluhan", "id_antrian", "antrian_id");
    }

}
