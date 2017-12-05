@extends('master.indexAdmin')
@section('content')
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Data Tamu<span class="col-sm-offset-8"><a href="data-tamu/tambah" class="btn btn-primary">Tambah data</a></span></h1>
          <!-- <h2 class="sub-header"></h2> -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Id Tamu</th>
                  <th>No. Identitas</th>
                  <th>Nama Lengkap</th>
                  <th>Alamat</th>
                  <th>No. HP</th>
                  <th>Email</th>
                  <th>aksi</th>
                </tr>
              </thead>
            @foreach($datas as $data)
              <tbody>
                <tr>
                  <td>{{ $data->id_tamu }}</td>
                  <td>{{ $data->no_identitas }}</td>
                  <td>{{ $data->nama_tamu }}</td>
                  <td>{{ $data->alamat }}</td>
                  <td>{{ $data->no_tlp }}</td>
                  <td>{{ $data->email }}</td>
                  <td>
                    <a href="data-tamu/edit/{{ $data->id_tamu }}">edit data</a>
                    <a href="data-tamu/hapus/{{ $data->id_tamu }}" onclick="return confirm('apakah yakin anda akan menghapus ini ?')">hapus data</a>
                  </td>
                </tr>
              </tbody>
            @endforeach
            </table>
          </div>
        </div>