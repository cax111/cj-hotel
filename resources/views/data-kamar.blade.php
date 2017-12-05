@extends('master.indexAdmin')
@section('content')
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Data Kamar<span class="col-sm-offset-8"><a href="data-kamar/tambah" class="btn btn-primary">Tambah data</a></span></h1>
          <!-- <h2 class="sub-header"></h2> -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>ID Kamar</th>
                  <th>Nama Jenis Kamar</th>
                  <th>Harga Sewa</th>
                  <th>Deskripsi Kamar</th>
                  <th>Status</th>
                  <th>aksi</th>
                </tr>
              </thead>
              <tbody>
            @foreach($datas as $data)
                <tr>
                  <td>{{ $data->id_kamar }}</td>
                  <td>{{ $data->nama_jenis }}</td>
                  <td>{{ $data->harga_sewa }}</td>
                  <td>{{ $data->deskripsi_kamar }}</td>
                  <td>{{ $data->status }}</td>
                  <td>
                    <a href="data-kamar/edit/{{ $data->id_kamar }}">edit data</a>
                    <a href="data-kamar/hapus/{{ $data->id_kamar }}" onclick="return confirm('apakah yakin anda akan menghapus ini ?')">hapus data</a>
                  </td>
                </tr> 
            @endforeach
              </tbody>
            </table>
          </div>
          <h1 class="page-header">Jenis Kamar<span class="col-sm-offset-8"><a href="data-kamar/tambah" class="btn btn-primary">Tambah data</a></span></h1>
          <!-- <h2 class="sub-header"></h2> -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>ID Jenis</th>
                  <th>Nama Jenis Kamar</th>
                  <th>aksi</th>
                </tr>
              </thead>
            @foreach($datas2 as $data2)
              <tbody>
                <tr>
                  <td>{{ $data2->id_jenis }}</td>
                  <td>{{ $data2->nama_jenis }}</td>
                  <td>
                    <a href="data-kamar/edit/{{ $data2->id_kamar }}">edit data</a>
                    <a href="data-kamar/hapus/{{ $data2->id_kamar }}" onclick="return confirm('apakah yakin anda akan menghapus ini ?')">hapus data</a>
                  </td>
                </tr>
              </tbody>
            @endforeach
            </table>
          </div>
        </div>