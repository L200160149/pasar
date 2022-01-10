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

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Pembangunan</h3>

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
          <a href="{{ route('pembangunanCreate') }}" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Tambah Data</a>

          <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Pasar</th>
                  <th>DAK</th>
                  <th>TP</th>
                  <th>BTT</th>
                  <th>APBD</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              @php $no = 1 @endphp
                @foreach($daftarPembangunan as $pembangunan)
                    <tr>
                    <td>{{ $no++ }}</td>
                        <td>{{ $pembangunan->nama_pasar }}</td>
                        <td>{{ $pembangunan->dak }}</td>
                        <td>{{ $pembangunan->tp }}</td>
                        <td>{{ $pembangunan->btt }}</td>
                        <td>{{ $pembangunan->apbd }}</td>
                        <td>{{ $pembangunan->keterangan }}</td>
                        <td>
                          <a href="{{ route('pembangunanUpdateView', $pembangunan->id) }}" class="btn btn-info"><i class="far fa-edit"></i></a>
                          <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#modal-detail{{ $pembangunan->id }}"><i class="fas fa-eye"></i></a>
                          <!-- /.modal -->
                          <div class="modal fade" id="modal-detail{{ $pembangunan->id }}">
                            <div class="modal-dialog modal-lg modal-detail">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Detail Pembangunan : {{ $pembangunan->nama_pasar }}</h4>
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
                                        <td>{{ $pembangunan->nama_pasar }}</td>
                                      </tr>
                                      <tr>
                                        <td>2.</td>
                                        <td>DAK</td>
                                        <td>{{ $pembangunan->dak }}</td>
                                      </tr>
                                      <tr>
                                        <td>3.</td>
                                        <td>TP</td>
                                        <td>{{ $pembangunan->tp }}</td>
                                      </tr>
                                      <tr>
                                        <td>4.</td>
                                        <td>BTT</td>
                                        <td>{{ $pembangunan->btt }}</td>
                                      </tr>
                                      <tr>
                                        <td>5.</td>
                                        <td>APBD</td>
                                        <td>{{ $pembangunan->apbd }}</td>
                                      </tr>
                                      <tr>
                                        <td>6.</td>
                                        <td>Toko Kios</td>
                                        <td>{{ $pembangunan->toko_kios }}</td>
                                      </tr>
                                      <tr>
                                        <td>7.</td>
                                        <td>Los Meja</td>
                                        <td>{{ $pembangunan->los_meja }}</td>
                                      </tr>
                                      <tr>
                                        <td>8.</td>
                                        <td>Los Tempel</td>
                                        <td>{{ $pembangunan->los_tempel }}</td>
                                      </tr>
                                      <tr>
                                        <td>9.</td>
                                        <td>Los Tanpa Meja</td>
                                        <td>{{ $pembangunan->los_tanpa_meja }}</td>
                                      </tr>
                                      <tr>
                                        <td>10.</td>
                                        <td>Keterangan</td>
                                        <td>{{ $pembangunan->keterangan }}</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          <form action="{{ route('pembangunanDestroy', $pembangunan->id) }}" method="POST" class="d-inline">
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
                  <th>DAK</th>
                  <th>TP</th>
                  <th>BTT</th>
                  <th>APBD</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
            </table>
          </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection