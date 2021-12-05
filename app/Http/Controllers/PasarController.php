<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasarController extends Controller
{
    public function index() 
    {
        $pasar = DB::table('pasar')->get();

        return view('pasar.index', [
            'daftarPasar' => $pasar
        ]);
    }
}
