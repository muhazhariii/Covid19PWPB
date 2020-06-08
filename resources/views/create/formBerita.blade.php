@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<body>
<br><br>
<div class="container">
  	<div class="modal-body">
	    <form action="{{ url('admin/berita', @$berita->id ) }}" method="post" enctype="multipart/form-data">
	      @csrf

	        <div class="form-group">
	          <label for="foto">Upload Gambar</label>
	          <input name="foto" type="file" class="form-control" id="foto" value="{{ old('berita', @$berita->foto) }}">
	        </div>

	        <div class="form-group">
	          <label for="judul">Judul Berita</label>
	          <input name="judul" type="text" class="form-control" id="judul" value="{{ old('berita', @$berita->judul) }}">
	        </div>

	        <div class="form-group">
	            <label for="deskripsi">Deskripsi Berita</label>
	            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="15">{{ old('berita', @$berita->deskripsi) }}</textarea>
	        </div>    
	</div>
	<div class="modal-footer">
	    <button type="submit" class="btn btn-primary">Update Data</button>
	    </form>
	</div>       
</div>
</body>
</html>
@endsection