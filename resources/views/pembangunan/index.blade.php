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
          <h3 class="card-title">Title</h3>

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
                                <a href="#" class="btn btn-info"><i class="far fa-edit"></i></a>
                                <a href="#" class="btn btn-warning"><i class="fas fa-eye"></i></a>
                                <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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