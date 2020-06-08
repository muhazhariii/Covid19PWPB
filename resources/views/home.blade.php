@extends('layouts.app')

@section('content')
<body>
  <header class="masthead">
    <div class="container" class="">
      <div class="masthead-subheading">Green Healthy</div>
      <div class="masthead-heading text-uppercase">Green Healthy</div>
    </div>
  </header>
  <section class="page-section" id="services">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Fitur</h2>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-diagnoses fa-stack-1x fa-inverse"></i></span>
          <h4 class="my-3">Data Covid</h4>
          <p class="text-muted">Menyediakan info kasus covid-19 di Indonesia</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-newspaper fa-stack-1x fa-inverse"></i></span>
          <h4 class="my-3">Berita</h4>
          <p class="text-muted">Berita-berita mengenai covid dan juga rumah sakit rujukan</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-store fa-stack-1x fa-inverse"></i></span>
          <h4 class="my-3">Toko</h4>
          <p class="text-muted">Menyediakan peralatan kesehatan untuk dijual</p>
        </div>
      </div>
    </div>
        </section>
    <div class="container">
        <a style="display: block; font-size: 50px;" href="{{ url('/donasi/create') }}" class="btn btn-success">Donasi</a><br>

      History Donasi :
          @foreach ($donasi as $row)
          <div class="col-md-12">
            <div class="bg-info box text-white">
              <div class="row">
                <div class="col-md-6">
                  <h6>{{ $row->nama }} | {{ $row->email }} | {{ $row->nohp }}</h6>
                  <p>Pembayaran VIA : {{ $row->pembayaran }} | Rp. {{ number_format($row->nominal) }}</p>
                  <i>{{ $row->tanggal }}</i>
                </div>
              </div>
            </div>
          </div>
          @endforeach
    </div>  
</body>
@endsection
<style type="text/css">
  .box{
      padding: 30px 40px;
      border-radius: 5px;
    }
</style>