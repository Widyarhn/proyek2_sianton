<?php

namespace App\Models\Pasien;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;

    protected $table = "keluhan_pasien";
    protected $guarded = [''];
    public $timestamps = false;

    public function antrian()
    {
        return $this->belongsTo("App\Models\Antrian", "antrian_id", "id_antrian");
    }


}
