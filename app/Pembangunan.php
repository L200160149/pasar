<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembangunan extends Model
{
    protected $table = 'pembangunan';

    protected $fillable = ['id_pasar', 'dak', 'tp', 'btt', 'apbd', 'toko_kios', 'los_meja', 'los_tempel', 'los_tanpa_meja', 'keterangan'];
}
