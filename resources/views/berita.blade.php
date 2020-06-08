@extends('layouts.app')

@section('content')
<body>
<br><br><br>
<div class="container">
    <div class="row justify-content-center">
        @foreach ($berita as $row)
        <div class="col-md-6 ">
            <div class="card mb-4">
                <a href="{{ url('berita') }}/{{ $row->id }}"><img class="card-img-top" src="{{ $row->getFoto() }}" width="200" height="300" alt="Card image cap">
                <div class="card-body">
                    <strong><h2 class="card-title">{{ $row->judul }}</h2></strong></a>
                    <p>08/06/2020</p>
                    <button class="bg-success">viral</button> 
                    <button class="bg-warning">news</button> 
                    <button class="bg-info">politik</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</body>	
@endsection