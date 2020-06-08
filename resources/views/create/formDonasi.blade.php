@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
	<head>
		<title>Donasi</title>
	</head>
<body>
<br><br>
<div class="container">
  	<div class="modal-body">
	    <form action="{{ url('donasi', @$donasi->id ) }}" method="post" enctype="multipart/form-data">
	      @csrf

	        <div class="form-group">
	          <label for="nama">Nama</label>
	          <input name="nama" type="text" class="form-control" id="nama">
	        </div>

	        <div class="form-group">
	          <label for="email">Email</label>
	          <input name="email" type="email" class="form-control" id="email" placeholder="example@gmail.com">
	        </div>

	        <div class="form-group">
	          <label for="nohp">Nomor HP</label>
	          <input name="nohp" type="text" class="form-control" id="nohp" placeholder="contoh : 0895631993728">
	        </div>

	        <div class="form-group">
	          <label for="pembayaran">Pilih Metode Pembayaran</label><br>
	          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="pembayaran" id="pembayaran" value="GOPAY">GOPAY <br>	
	          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="pembayaran" id="pembayaran" value="OVO">OVO <br>	
	          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="pembayaran" id="pembayaran" value="DANA">DANA 
	        </div>

	        <div class="form-group">
	            <label for="nominal">Nominal</label>
	             <input name="nominal" placeholder="10.000" type="text" class="form-control" id="nominal">
	        </div>    
	</div>
	<div class="modal-footer">
	    <button type="submit" class="btn btn-primary">Donasi</button>
	    </form>
	</div>       
</div>
</body>
</html>
@endsection