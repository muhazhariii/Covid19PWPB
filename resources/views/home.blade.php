@extends('layouts.app')

@section('content')
<head>
        <style type="text/css">
          body{
            margin-top: -25px;
          }
        </style>
</head>
<body>
  <header class="masthead">
    <div class="container">
      <div class="masthead-subheading">Selamat datang di web para senjakiawan</div>
      <div class="masthead-heading text-uppercase">Menampilkan jumlah virus senja dan beberapa peralatan senja</div>
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
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" href="{{ url('korona') }}"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="covid/img/portfolio/04-thumbnail.jpg" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Data Covid</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" href="{{ url('/berita') }}"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="covid/img/portfolio/05-thumbnail.jpg" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Berita</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" href="{{ url('toko') }}"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="covid/img/portfolio/06-thumbnail.jpg" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Toko</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
</body>
@endsection