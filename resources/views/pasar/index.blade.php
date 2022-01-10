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
      
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Pasar</h3>
          
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
              
            </button>
          </div>
        </div>
        <div class="card-body">
          @if(session()->has('success'))
          <div class="alert alert-success" role="alert">
              <strong>{{ session()->get('success') }}</strong>
          </div>
          @endif
          <a href="{{ route('pasarCreate') }}" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Tambah Data</a>
          <div class="card">
            <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Pasar</th>
                    <th>Alamat</th>
                    <th>Tahun Pembangunan</th>
                    <th>Luas Tanah</th>
                    <th>Luas Bangunan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php $no = 1 @endphp
                    @foreach($daftarPasar as $pasar)
                        <tr>
                        <td>{{ $no++ }}</td>
                            <td>{{ $pasar->nama_pasar }}</td>
                            <td>{{ $pasar->alamat }}</td>
                            <td>{{ $pasar->tahun_pembangunan }}</td>
                            <td>{{ $pasar->luas_tanah }}</td>
                            <td>{{ $pasar->luas_bangunan }}</td>
                            <td>
                                <a href="{{ route('pasarUpdateView', $pasar->id) }}" class="btn btn-info"><i class="far fa-edit"></i></a>
                                <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#modal-detail{{ $pasar->id }}"><i class="fas fa-eye"></i></a>
                                <!-- /.modal -->
                                <div class="modal fade" id="modal-detail{{ $pasar->id }}">
                                  <div class="modal-dialog modal-lg modal-detail">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title">Detail Pasar : {{ $pasar->nama_pasar }}</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <table class="table table-striped">
                                          <tbody>
                                            <tr>
                                              <td>1.</td>
                                              <td>Nama Pasar</td>
                                              <td>{{ $pasar->nama_pasar }}</td>
                                            </tr>
                                            <tr>
                                              <td>2.</td>
                                              <td>Alamat Pasar</td>
                                              <td>{{ $pasar->alamat }}</td>
                                            </tr>
                                            <tr>
                                              <td>3.</td>
                                              <td>Tahun Pembangunan</td>
                                              <td>{{ $pasar->tahun_pembangunan }}</td>
                                            </tr>
                                            <tr>
                                              <td>4.</td>
                                              <td>Koordinat</td>
                                              <td>{{ $pasar->latitude }}, {{ $pasar->longitude }}</td>
                                            </tr>
                                            <tr>
                                              <td>5.</td>
                                              <td>Kondisi</td>
                                              <td>{{ $pasar->kondisi_pasar }}</td>
                                            </tr>
                                            <tr>
                                              <td>6.</td>
                                              <td>Luas Tanah</td>
                                              <td>{{ $pasar->luas_tanah }}</td>
                                            </tr>
                                            <tr>
                                              <td>7.</td>
                                              <td>Luas Bangunan</td>
                                              <td>{{ $pasar->luas_bangunan }}</td>
                                            </tr>
                                            <tr>
                                              <td>8.</td>
                                              <td>Jumlah Pedagang</td>
                                              <td>{{ $pasar->jumlah_pedagang }}</td>
                                            </tr>
                                            <tr>
                                              <td>9.</td>
                                              <td>Los</td>
                                              <td>{{ $pasar->los }}</td>
                                            </tr>
                                            <tr>
                                              <td>10.</td>
                                              <td>Kios Toko</td>
                                              <td>{{ $pasar->kios_toko }}</td>
                                            </tr>
                                            <tr>
                                              <td>11.</td>
                                              <td>Kondisi</td>
                                              <td>{{ $pasar->kondisi_pasar }}</td>
                                            </tr>
                                            <tr>
                                              <td>12.</td>
                                              <td>Lapak</td>
                                              <td>{{ $pasar->lapak }}</td>
                                            </tr>
                                            <tr>
                                              <td>13.</td>
                                              <td>Omset Pertahun</td>
                                              <td>{{ $pasar->omzet_pertahun }}</td>
                                            </tr>
                                            <tr>
                                              <td colspan="3">
                                                <img width="33%" src="{{ asset('storage/'.$pasar->foto1) }}" alt="Foto 1">
                                                <img width="33%" src="{{ asset('storage/'.$pasar->foto2) }}" alt="Foto 2">
                                                <img width="33%" src="{{ asset('storage/'.$pasar->foto3) }}" alt="Foto 3">
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                    <!-- /.modal-content -->
                                  </div>
                                  <!-- /.modal-dialog -->
                                </div>
                                <form action="{{ route('pasarDestroy', $pasar->id) }}" method="POST" class="d-inline">
                                  @csrf
                                  @method('delete')
                                  <button onclick="return confirm('Hapus Data')" class="btn btn-danger m-1"><i class="fas fa-trash-alt"></i></button>
                              </form>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No.</th>
                    <th>Nama Pasar</th>
                    <th>Platform(s)</th>
                    <th>Tahun Pembangunan</th>
                    <th>Luas Tanah</th>
                    <th>Luas Bangunan</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          &copy;  Dinas Perdagangan dan Perindustrian Kabupaten Boyolali
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection