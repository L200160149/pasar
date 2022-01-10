
    
   
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Album example · Bootstrap v5.0</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('/admin//plugins/fontawesome-free/css/all.min.css') }}">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
    .background-table {

        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 0.5em 1.5em rgb(0 0 0 / 10%), inset 0 0.125em 0.5em rgb(0 0 0 / 15%);
    }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.1/examples/headers/headers.css" rel="stylesheet">
    
  </head>
  <body>
    
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <img src="{{ asset('images/logo_boyolali.png') }}" width="40" height="52" alt="">
            <span class="fs-4" style="margin-left: 20px;"> DISPERINDAG Kab. Boyolali</span>
          </a>
    
          <ul class="nav nav-pills">
            <li class="nav-item"><a href="/" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Login</a></li>
          </ul>
        </header>

    </div>

    <div class="container" style="margin-top: 50px;">
        <h3 class="text-center" >Data Pasar Kabupaten Boyolali</h3>
        <table class="table table-light table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pasar</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tahun Pembangunan</th>
                <th scope="col">Koordinat</th>
                <th scope="col">Kondisi</th>
                <th scope="col">Detail</th>
            </tr>
            </thead>
            <tbody>
            @php
            $no = 1;    
            @endphp
            @foreach ($daftarPasar as $pasar)
            <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $pasar->nama_pasar }}</td>
                <td>{{ $pasar->nama_alamat }}</td>
                <td>{{ $pasar->tahun_pembangunan }}</td>
                <td>{{ $pasar->latitude }}, {{ $pasar->longitude }}</td>
                <td>{{ $pasar->kondisi }}</td>
                <td>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailModal{{ $pasar->id }}">
                    <i class="fas fa-eye"></i>
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="detailModal{{ $pasar->id }}" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="detailModalLabel">Detail Pasar : {{ $pasar->nama_pasar }}</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                <td>14.</td>
                                <td>DAK</td>
                                <td>{{ $pasar->dak }}</td>
                              </tr>
                              <tr>
                                <td>15.</td>
                                <td>TP</td>
                                <td>{{ $pasar->tp }}</td>
                              </tr>
                              <tr>
                                <td>16.</td>
                                <td>BTT</td>
                                <td>{{ $pasar->btt }}</td>
                              </tr>
                              <tr>
                                <td>17.</td>
                                <td>APBD</td>
                                <td>{{ $pasar->apbd }}</td>
                              </tr>
                              <tr>
                                <td>18.</td>
                                <td>Toko Kios</td>
                                <td>{{ $pasar->toko_kios }}</td>
                              </tr>
                              <tr>
                                <td>19.</td>
                                <td>Los Meja</td>
                                <td>{{ $pasar->los_meja }}</td>
                              </tr>
                              <tr>
                                <td>20.</td>
                                <td>Los Tempel</td>
                                <td>{{ $pasar->los_tempel }}</td>
                              </tr>
                              <tr>
                                <td>21.</td>
                                <td>Los Tanpa Meja</td>
                                <td>{{ $pasar->los_tanpa_meja }}</td>
                              </tr>
                              <tr>
                                <td>22.</td>
                                <td>Keterangan</td>
                                <td>{{ $pasar->keterangan }}</td>
                              </tr>
                              <tr>
                                <td colspan="3">
                                  <img width="100%" src="{{ asset('storage/'.$pasar->foto1) }}" alt="Foto 1">
                                </td>
                              </tr>
                              <tr>
                                <td colspan="3">
                                  <img width="100%" src="{{ asset('storage/'.$pasar->foto2) }}" alt="Foto 2">
                                </td>
                              </tr>
                              <tr>
                                <td colspan="3">
                                  <img width="100%" src="{{ asset('storage/'.$pasar->foto3) }}" alt="Foto 3">
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                      </div>
                    </div>
                </td>
                </div>

                
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
  
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <span class="text-muted">© 2022 Dinas Perdagangan dan Perindustrian Kabupaten Boyolali.</span>
        </footer>
    </div>
    <script src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      
  </body>
</html>
