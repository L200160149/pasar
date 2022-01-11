@extends('layouts.app')

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pembangunan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pembangunan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Tambah Data Pembangunan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('pembangunanStore') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="id_pasar">Pilih Pasar <span style="color: red;">*</span></label>
                        <select name="id_pasar" id="id_pasar" class="form-control @error('id_pasar') is-invalid @enderror">
                            <option value="">-- Pilih Pasar --</option>
                            @foreach ($pasar as $psr)
                                <option value="{{ $psr->id }}" {{ old('id_pasar') == $psr->id ? 'selected' : null }}>{{ $psr->nama_pasar }}</option>
                            @endforeach
                        </select>
                        @error('id_pasar')
                            <div class="ml-1" style="color: red;">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="dak">DAK</label>
                        <input type="text" name="dak" value="{{ old('dak') }}" class="form-control @error('dak') is-invalid @enderror" id="dak">
                        @error('dak')
                        <div class="ml-1" style="color: red;">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="tp">TP</label>
                        <input type="text" name="tp" value="{{ old('tp') }}" class="form-control" id="tp">
                        @error('tp')
                            <div class="ml-1" style="color: red;">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="btt">BTT</label>
                        <input type="text" name="btt" value="{{ old('btt') }}" class="form-control" id="btt">
                        @error('btt')
                        <div class="ml-1" style="color: red;">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="apbd">APBD</label>
                        <input type="text" name="apbd" value="{{ old('apbd') }}" class="form-control" id="apbd">
                        @error('apbd')
                            <div class="ml-1" style="color: red;">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="toko_kios">Toko Kios</label>
                        <input type="text" name="toko_kios" value="{{ old('toko_kios') }}" class="form-control" id="toko_kios">
                        @error('toko_kios')
                        <div class="ml-1" style="color: red;">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="los_meja">Los Meja</label>
                        <input type="text" name="los_meja" value="{{ old('los_meja') }}" class="form-control" id="los_meja">
                        @error('los_meja')
                            <div class="ml-1" style="color: red;">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="los_tempel">Los Tempel</label>
                        <input type="text" name="los_tempel" value="{{ old('los_tempel') }}" class="form-control" id="los_tempel">
                        @error('los_tempel')
                        <div class="ml-1" style="color: red;">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="los_tanpa_meja">Los Tanpa Meja</label>
                        <input type="text" name="los_tanpa_meja" value="{{ old('los_tanpa_meja') }}" class="form-control" id="los_tanpa_meja">
                        @error('los_tanpa_meja')
                            <div class="ml-1" style="color: red;">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" value="{{ old('keterangan') }}" id="keterangan">
                        @error('keterangan')
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
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            </form>
        </div>
    </section>
</div>

@endsection