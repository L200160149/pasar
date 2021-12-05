<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembangunanController extends Controller
{
    public function index() 
    {
        $pembangunan = DB::table('pembangunan')->join('pasar', 'pasar.id_pasar', '=', 'pembangunan.id_pasar')->get();
        
        return view('pembangunan.index', [
            'daftarPembangunan' => $pembangunan
        ]);
    }
}
