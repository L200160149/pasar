<?php

namespace App\Http\Controllers;

use App\Pasar;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $pasar = Pasar::join('pembangunan', 'pembangunan.id_pasar', '=', 'pasar.id')->orderBy('pembangunan.id', 'asc')->get();

        return view('home',[
            'daftarPasar' => $pasar
        ]);

    }
}
