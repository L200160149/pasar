@extends('layouts.app')

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pasar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pasar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Ubah Data Pasar</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('pasarUpdate', $pasar->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="nama_pasar">Nama Pasar <span style="color: red;">*</span></label>
                        <input type="text" name="nama_pasar" value="{{ old('nama_pasar') ?? $pasar->nama_pasar }}" class="form-control @error('nama_pasar') is-invalid @enderror" id="nama_pasar" placeholder="Nama pasar">
                        @error('nama_pasar')
                            <div class="ml-1" style="color: red;">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="alamat">Alamat <span style="color: red;">*</span></label>
                        <input type="text" name="alamat" value="{{ old('alamat') ?? $pasar->alamat }}" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Alamat pasar">
                        @error('alamat')
                        <div class="ml-1" style="color: red;">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="tahun_pembangunan">Tahun Pembangunan</label>
                        <input type="text" name="tahun_pembangunan" value="{{ old('tahun_pembuatan') ?? $pasar->tahun_pembangunan }}" class="form-control" id="tahun_pembangunan" placeholder="1997">
                        @error('tahun_pembangunan')
                            <div class="ml-1" style="color: red;">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="kondisi_pasar">Kondisi Pasar</label>
                        <input type="text" name="kondisi_pasar" value="{{ old('kondisi_pasar') ?? $pasar->kondisi_pasar }}" class="form-control" id="kondisi_pasar">
                        @error('kondisi_pasar')
                        <div class="ml-1" style="color: red;">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="latitude">Latitude</label>
                        <input type="text" name="latitude" value="{{ old('latitude') ?? $pasar->latitude }}" class="form-control" id="latitude">
                        @error('latitude')
                            <div class="ml-1" style="color: red;">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="longitude">Longitude</label>
                        <input type="text" name="longitude" value="{{ old('longitude') ?? $pasar->longitude }}" class="form-control" id="longitude">
                        @error('longitude')
                        <div class="ml-1" style="color: red;">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="luas_tanah">Luas Tanah</label>
                        <input type="text" name="luas_tanah" value="{{ old('luas_tanah') ?? $pasar->luas_tanah }}" class="form-control" id="luas_tanah">
                        @error('luas_tanah')
                            <div class="ml-1" style="color: red;">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="luas_bangunan">Luas Bangunan</label>
                        <input type="text" name="luas_bangunan" value="{{ old('luas_bangunan') ?? $pasar->luas_bangunan }}" class="form-control" id="luas_bangunan">
                        @error('luas_bangunan')
                        <div class="ml-1" style="color: red;">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="jumlah_pedagang">Jumlah Pedagang</label>
                        <input type="text" name="jumlah_pedagang" value="{{ old('jumlah_pedagang') ?? $pasar->jumlah_pedagang }}" class="form-control" id="jumlah_pedagang">
                        @error('jumlah_pedagang')
                            <div class="ml-1" style="color: red;">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="los">Los</label>
                        <input type="text" name="los" class="form-control" value="{{ old('los') ?? $pasar->los }}" id="los">
                        @error('los')
                        <div class="ml-1" style="color: red;">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="kios_toko">Kios Toko</label>
                        <input type="text" name="kios_toko" value="{{ old('kios_toko') ?? $pasar->kios_toko }}" class="form-control" id="kios_toko">
                        @error('kios_toko')
                        <div class="ml-1" style="color: red;">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="lapak">Lapak</label>
                        <input type="text" name="lapak" value="{{ old('lapak') ?? $pasar->lapak }}" class="form-control" id="lapak" >
                        @error('lapak')
                        <div class="ml-1" style="color: red;">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="omzet_pertahun">Omset Pertahun</label>
                        <input type="text" name="omzet_pertahun" value="{{ old('omzet_pertahun') ?? $pasar->omzet_pertahun }}" class="form-control" id="omzet_pertahun" >
                        @error('omzet_pertahun')
                        <div class="ml-1" style="color: red;">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="foto1">Foto 1</label>
                        <input type="file" name="foto1" value="{{ old('foto1') ?? $pasar->foto1 }}" class="form-control @error('foto1') is-invalid @enderror" id="foto1" >
                        @error('foto1')
                        <div class="ml-1" style="color: red;">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="foto2">Foto 2</label>
                        <input type="file" name="foto2" value="{{ old('foto2') ?? $pasar->foto2 }}" class="form-control @error('foto2') is-invalid @enderror" id="foto2" >
                        @error('foto2')
                        <div class="ml-1" style="color: red;">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="foto3">Foto 3</label>
                        <input type="file" name="foto3" value="{{ old('foto3') ?? $pasar->foto3 }}" class="form-control @error('foto3') is-invalid @enderror" id="foto3" >
                        @error('foto3')
                        <div class="ml-1" style="color: red;">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
            </form>
        </div>
    </section>
</div>

@endsection