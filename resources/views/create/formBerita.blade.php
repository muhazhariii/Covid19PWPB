<!DOCTYPE html>
<html>
<head>
	<title>Form Siswa</title>

<link rel="stylesheet" type="text/css" href="{{asset('/assets/media/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('/assets/media/plugins/toastr/toastr.min.css')}}">
</head>

<style type="text/css">
	body{
		font-family: consolas;
	}
	table{
		margin: auto;
		margin-top: 100px;
		width: 50%;
		height: 400px;
    border: 4px solid grey;
  }
</style>
<body>
	@if(session('error'))
	<div class="alert alert-danger">
		{{ session('error') }}
	</div>
	@endif

	@if(count($errors) > 0)
	<div class="alert alert-danger">
		<strong>Perhatian</strong>
		<br>
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<form action="{{ url('admin/berita', @$berita->id ) }}" method="POST" enctype="multipart/form-data">
			@csrf

      @if(!empty($berita))
        @method('PATCH')
      @endif

		<table class="bg-secondary">
      <tr>
        <td colspan="5"><h1 align="center">Form Berita</h1></td>
      </tr>
			<tr class="form-group row" class="nis">
				<td class="col-sm-2">JUDUL</td>
				<td>:</td>
		    	<td class="col-sm-3">
     				<input type="text" name="judul" class="form-control" value="{{ old('nis', @$berita->judul ) }}">
   		 		</td>
  			</tr>
  			<tr class="form-group row">
    			<td class="col-sm-2 col-form-label">DESKRIPSI</td>
    			<td>:</td>
    			<td class="col-sm-3">
      				<input type="text" class="form-control" value="{{ old('deskripsi', @$berita->deskripsi) }}" name="deskripsi">
    			</td>
  			</tr>
        <tr class="form-group row">
          <td class="col-sm-2 col-form-label">FOTO</td>
          <td>:</td>
          <td>
            <input type="file" class="form-control" value="{{ old('FOTO', @$berita->foto) }}" name="foto">
          </td>
        </tr>
  			<tr class="form-group row">
    			<td class="col-sm-10" colspan="3">
      				<input type="submit" class="btn btn-success btn-block" value="simpan">
    			</td>
  			</tr>
  		</table>	
	</form>
</body>
</html>