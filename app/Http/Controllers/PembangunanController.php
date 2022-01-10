<?php

namespace App\Http\Controllers;

use App\Pasar;
use App\Pembangunan;
use Illuminate\Support\Facades\Storage;

class PembangunanController extends Controller
{
    public function index() 
    {
        $pembangunan = Pasar::join('pembangunan', 'pembangunan.id_pasar', '=', 'pasar.id')->orderBy('pembangunan.id', 'asc')->get();

        return view('pembangunan.index', [
            'daftarPembangunan' => $pembangunan
        ]);
    }

    // fungsi insert
    public function create()
    {
        $pasar = Pasar::orderBy('id', 'asc')->get();

        return view('pembangunan.create', [
            'pasar' => $pasar
        ]);
    }

    public function store()
    {
        $attr = request()->validate([
            'id_pasar' => 'required',
            'dak' => '',
            'tp' => '',
            'btt' => '',
            'apbd' => '',
            'toko_kios' => '',
            'los_meja' => '',
            'los_tempel' => '',
            'los_tanpa_meja' => '',
            'keterangan' => '',
        ]);

        Pembangunan::create($attr);

        session()->flash('success', 'Data berhasil ditambahkan.');

        return redirect('admin/pembangunan');
    }

    public function update(Pembangunan $pembangunan)
    {
        
        $attr = request()->validate([
            'id_pasar' => 'required',
            'dak' => 'required',
            'tp' => '',
            'btt' => '',
            'apbd' => '',
            'toko_kios' => '',
            'los_meja' => '',
            'los_tempel' => '',
            'los_tanpa_meja' => '',
            'keterangan' => '',
        ]);

        $pembangunan->update($attr);

        session()->flash('success', 'Data berhasil diubah.');

        return redirect('admin/pembangunan');
    }

    // akhir fungsi insert

    // fungsi update
    public function updateview(Pembangunan $pembangunan)
    {
        $pasar = Pembangunan::join('pasar', 'pasar.id', '=', 'pembangunan.id_pasar')->get();

        $pembangunan = Pasar::join('pembangunan', 'pembangunan.id_pasar', '=', 'pasar.id')->where('pembangunan.id', '=', $pembangunan->id)->first();

        return view('pembangunan.update', [
            'pasar' => $pasar,
            'pembangunan' => $pembangunan,
        ]);
    }
    // akhir fungsi update

    public function destroy(Pembangunan $pembangunan)
    {
        // hapus file
        Storage::delete($pembangunan->foto1);
        Storage::delete($pembangunan->foto2);
        Storage::delete($pembangunan->foto3);

        $pembangunan->delete();

        session()->flash('success', 'Data berhasil dihapus.');

        return redirect('admin/pembangunan');
    }
}
