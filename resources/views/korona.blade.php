@extends('layouts.app')

@section('content')
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Data Covid-19</title>
    <style type="text/css">
      body{
        margin-top: -70px;
      }
    </style>
  </head>
  <body>
    <header class="masthead1">
    <div class="container">
      <div class="masthead-subheading">Berikut adalah info kasus</div>
      <div class="masthead-heading text-uppercase">Di Indonesia</div>
    </div>
  </header>
  <br><br>
  		<div class="container">
        @foreach ($suspects2 as $sus)
        <div class="row">
          <div class="col-md-6">
            <div class="bg-info box text-white">
              <div class="row">
                <div class="col-md-6">
                  <h5>Positif</h5>
                  <h3>{{ $sus['positif'] }}</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="bg-warning box text-white">
              <div class="row">
                <div class="col-md-6">
                  <h5>Dirawat</h5>
                  <h3>{{ $sus['dirawat'] }}</h3>
                </div>
              </div>
            </div>
          </div>
           <div class="col-md-6">
            <div class="bg-success box text-white">
              <div class="row">
                <div class="col-md-6">
                  <h5>Sembuh</h5>
                  <h3>{{ $sus['sembuh'] }}</h3>
                </div>
              </div>
            </div>
          </div>
           <div class="col-md-6">
            <div class="bg-danger box text-white">
              <div class="row">
                <div class="col-md-6">
                  <h5>Meninggal</h5>
                  <h3>{{ $sus['meninggal'] }}</h3>
                </div>
              </div>
            </div>
          </div>
        </div><br>
        @endforeach
        <div class="p-3 mb-2 bg-dark text-white">Data Covid-19 di Indonesia</div>
    		<table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Provinsi</th>
              <th scope="col">Positif</th>
              <th scope="col">Sembuh</th>
              <th scope="col">Meninggal</th>
            </tr>
          </thead>
          <tbody>
          <?php $no = 1; ?>
          @foreach ($suspects as $data)
          <tr>
              <th scope="row">{{ $no++ }}</th>
              <td>{{ $data['attributes']['Provinsi'] }}</td>
              <td class="posi">{{ $data['attributes']['Kasus_Posi'] }}</td>
              <td class="semb">{{ $data['attributes']['Kasus_Semb'] }}</td>
              <td class="meni">{{ $data['attributes']['Kasus_Meni'] }}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
  		</div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</body>
</html>
@endsection
<style type="text/css">
    .posi{
        color: blue;
    }
    .semb{
        color: green;
    }
    .meni{
        color: red;
    }
    .box{
      padding: 30px 40px;
      border-radius: 5px;
    }
</style>

