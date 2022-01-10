<?php

namespace App\Http\Controllers;

use App\Pasar;
use Illuminate\Support\Facades\Storage;

class PasarController extends Controller
{
    public function index() 
    {
        $pasar = Pasar::get();

        return view('pasar.index', [
            'daftarPasar' => $pasar
        ]);
    }

    // fungsi insert
    public function create()
    {
        return view('pasar.create');
    }

    public function store()
    {
        $attr = request()->validate([
            'nama_pasar' => 'required',
            'alamat' => 'required',
            'tahun_pembangunan' => '',
            'longitude' => '',
            'latitude' => '',
            'kondisi_pasar' => '',
            'luas_tanah' => '',
            'luas_bangunan' => '',
            'jumlah_pedagang' => '',
            'los' => '',
            'kios_toko' => '',
            'lapak' => '',
            'omzet_pertahun' => '',
            'foto1' => 'required|mimes:jpeg,png,jpg|max:2048',
            'foto2' => 'required|mimes:jpeg,png,jpg|max:2048',
            'foto3' => 'required|mimes:jpeg,png,jpg|max:2048',
        ]);

        if (request()->file('foto1')) {
            $foto1 = request()->file('foto1')->store("/images/pasar");
        } else {
            $foto1 = null;
        }
        if (request()->file('foto2')) {
            $foto2 = request()->file('foto2')->store("/images/pasar");
        } else {
            $foto2 = null;
        }
        if (request()->file('foto3')) {
            $foto3 = request()->file('foto3')->store("/images/pasar");
        } else {
            $foto3 = null;
        }

        $attr['foto1'] = $foto1;
        $attr['foto2'] = $foto2;
        $attr['foto3'] = $foto3;

        Pasar::create($attr);

        session()->flash('success', 'Data berhasil ditambahkan.');

        return redirect('admin/pasar');
    }

    public function update(Pasar $pasar)
    {
        $attr = request()->validate([
            'nama_pasar' => 'required',
            'alamat' => 'required',
            'tahun_pembangunan' => '',
            'longitude' => '',
            'latitude' => '',
            'kondisi_pasar' => '',
            'luas_tanah' => '',
            'luas_bangunan' => '',
            'jumlah_pedagang' => '',
            'los' => '',
            'kios_toko' => '',
            'lapak' => '',
            'omzet_pertahun' => '',
            'foto1' => 'mimes:jpeg,png,jpg|max:2048',
            'foto2' => 'mimes:jpeg,png,jpg|max:2048',
            'foto3' => 'mimes:jpeg,png,jpg|max:2048',
        ]);

        if (request()->file('foto1')) {
            // hapus file
            Storage::delete($pasar->foto1);
            $foto1 = request()->file('foto1')->store("images/pasar");
            $attr['foto1'] = $foto1;
        }

        if (request()->file('foto2')) {
            Storage::delete($pasar->foto2);
            $foto2 = request()->file('foto2')->store("images/pasar");
            $attr['foto2'] = $foto2;
        }

        if (request()->file('foto3')) {
            Storage::delete($pasar->foto3);
            $foto3 = request()->file('foto3')->store("images/pasar");
            $attr['foto3'] = $foto3;
        }

        $pasar->update($attr);

        session()->flash('success', 'Data berhasil diubah.');

        return redirect('admin/pasar');
    }

    // akhir fungsi insert

    // fungsi update
    public function updateview(Pasar $pasar)
    {
        $pasar = Pasar::where('id', $pasar->id)->first();

        return view('pasar.update', [
            'pasar' => $pasar,
        ]);
    }
    // akhir fungsi update

    public function destroy(Pasar $pasar)
    {
        // hapus file
        Storage::delete($pasar->foto1);
        Storage::delete($pasar->foto2);
        Storage::delete($pasar->foto3);

        $pasar->delete();

        session()->flash('success', 'Data berhasil dihapus.');

        return redirect('admin/pasar');
    }
}
