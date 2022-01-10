<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasar extends Model
{
    protected $table = "pasar";

    protected $fillable = ['nama_pasar', 'alamat', 'tahun_pembangunan', 'longitude', 'latitude', 'kondisi_pasar', 'luas_tanah', 'luas_bangunan', 'jumlah_pedagang', 'los', 'kios_toko', 'lapak', 'omzet_pertahun', 'foto1', 'foto2', 'foto3'];

}
