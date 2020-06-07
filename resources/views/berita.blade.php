@extends('layouts.app')

@section('content')

<style type="text/css">
	.foto{
		border: 1px solid;
		text-align: center;
		width: 400px;
		margin-top: 100px;
	}
	.judul{
		text-align: center;
		width: 400px;
	}
	.deskripsi{
		text-align: center;
		width: 400px;
	}
	.button{
		border: 1px solid;
		text-align: center;
		width: 400px;
	}
	body{
		margin-top: -70px;
	}
</style>

<body>
  <br><br><br><br>
	@foreach ($berita as $row)
	<br>
	<div class="container">
		<div class="foto">
			<div>
				<a href="{{ url('berita') }}/{{ $row->id }}"><img src="{{ $row->getFoto() }}"width="100"></a>
			</div>
		</div>
		<div class="judul">
			<div>{{ $row->judul }}</div>
		</div>
		<div class="deskripsi">
			<div>{{ $row->deskripsi }}</div>
		</div>
	</div>
	@endforeach
</body>	
@endsection