@extends('layouts.app')

@section('content')

<style type="text/css">
    body{
        margin-top: 50px;
    }
</style>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-4">
            <img src="{{ url('images/logo.png') }}" class="rounded mx-auto d-block" width="300">
        </div>
        @foreach($barangs as $barang)
        <div class="col-md-4 ">
            <div class="card mb-4">
                <img class="card-img-top" src="{{ url('uploads') }}/{{ $barang->gambar }}" width="200" height="300" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                    <p class="card-text">
                        <strong>Harga : </strong>Rp. {{ number_format($barang->harga) }}<br>
                        <strong>Stok : </strong>{{ $barang->stok }} <hr>
                        <strong>Keterangan :</strong> <br>
                        {{ $barang->keterangan }}
                    </p>
                    <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart">
                            </i> Beli</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</body>
@endsection
