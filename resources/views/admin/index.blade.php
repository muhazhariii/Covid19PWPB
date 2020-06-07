@extends('layouts.app')

@section('content')
<br><br>
<div class="container">
  <div class="p-3 mb-2 bg-dark text-white">Data Barang</div>
    <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#exampleModal">
      <i class="fa fa-plus"></i> Tambah Data
    </button>
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Gambar</th>
          <th scope="col">Nama</th>
          <th scope="col">Harga</th>
          <th scope="col">Stok</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
          <?php $no = 1; ?>
          @foreach ($barangs as $b)
        <tr>
          <th scope="row">{{ $no++ }}</th>
          <td><img src="{{ 'Uploads' }}/{{$b->gambar}}" width="50" height="50"></td>
          <td>{{ $b->nama_barang }}</td>
          <td>Rp. {{ number_format($b->harga) }}</td>
          <td>{{ $b->stok }}</td>
          <td>{{ $b->keterangan }}</td>
          <td>
            <a class="btn btn-primary btn-sm" href="/admin/{{$b->id}}/edit"><i class="fa fa-edit"></i></a>
            <a class="btn btn-danger btn-sm" href="/admin/{{$b->id}}" onclick="return confirm('Anda yakin akan menghapus data ?');" ><i class="fa fa-trash"></i></a> 
          </td>
        </tr>
          @endforeach
      </tbody>
    </table>

<!-- Modal tambah -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/admin/tambah" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input name="nama_barang" type="text" class="form-control" id="nama_barang">
              </div>

              <div class="form-group">
                <label for="harga">Harga</label>
                <input name="harga" type="text" class="form-control" id="harga">
              </div>

              <div class="form-group">
                <label for="stok">Stok</label>
                <input name="stok" type="text" class="form-control" id="stok">
              </div>

              <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
              </div>

              <div class="form-group">
                <label for="gambar">Upload Gambar</label>
                <input name="gambar" type="file" class="form-control" id="gambar">
              </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah</button>
          </div>
           </form>
        </div>
      </div>
    </div>

    <div class="p-3 mb-2 bg-dark text-white">Data Berita</div>
    <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#modalberita">
      <i class="fa fa-plus"></i> Tambah Data
    </button>
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Gambar</th>
          <th scope="col">Judul Berita</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
          <?php $no = 1; ?>
          @foreach ($berita as $news)
        <tr>
          <th scope="row">{{ $no++ }}</th>
          <td><img src="{{ 'Uploads' }}/{{$news->foto}}" width="50" height="50"></td>
          <td>{{ $news->judul }}</td>
          <td>{{ $news->deskripsi }}</td>
          <td>
            <a class="btn btn-primary btn-sm" href="/admin/berita/{{$news->id}}/edit"><i class="fa fa-edit"></i></a>
            <a class="btn btn-danger btn-sm" href="/admin/berita/{{$news->id}}" onclick="return confirm('Anda yakin akan menghapus data ?');" ><i class="fa fa-trash"></i></a> 
          </td>
        </tr>
          @endforeach
      </tbody>
    </table>


    <!-- Modal tambah -->
    <div class="modal fade" id="modalberita" tabindex="-1" role="dialog" aria-labelledby="modalberitaLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalberitaLabel">Tambah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/admin/berita/create" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="foto">Upload Gambar</label>
                <input name="foto" type="file" class="form-control" id="foto">
              </div>

              <div class="form-group">
                <label for="judul">Judul Berita</label>
                <input name="judul" type="text" class="form-control" id="judul">
              </div>

              <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
              </div>         
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah</button>
          </div>
           </form>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection