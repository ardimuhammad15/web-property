@extends('laymas')
@section('content')

<!-- hero section -->
<section id="hero">
  <div class="container mb-5">
    <div class="jumbotron">
      <img src="Assets/img/banner.svg" alt="" class="img-hero" />
    </div>
  </div>
</section>

<!-- rekomendation -->

<section id="recommendation">
  <div class="container mt-2 mb-5">
    <div class="row mb-2">
      <div class="col-12">
        <h2>Unit Recommendation</h2>
      </div>
    </div>

    <div class="d-flex justify-content-between">
      <div class="row">
        <div class="card p-2" style="width: 23rem;">
          <a href="{{ route ('unit', 'minimalis_bsd') }}">
            <!-- <a href="{{ route ('unit') }}"> -->
            <img src="Assets/img/rumah1.svg" alt="" class="d-block w-100">
          </a>
          <div class="card-fasilitas mt-3 p-1">
            <span class="ms-3">
              <img src="Assets/img/icon_bathtub-f.svg" alt=""><sub class="ms-1">2</sub>
            </span>
            <span class="ms-3">
              <img src="Assets/img/icon_bed.svg" alt=""><sub class="ms-1" style="font-size: 18px;">2</sub>
            </span>
            <span class="ms-3">
              <img src="Assets/img/icon_luas.svg" alt=""><sub class="ms-1">2</sub>
            </span>
          </div>

          <div class="card-lokasi mt-4">
            <span>
              <img src="Assets/img/icon_lokasi.svg" alt="" style="width: 30px;"> <span style="font-weight: 500 ; font-size: 20px">Serpong, BSD</span>
            </span>
          </div>

        </div>
      </div>

      <div class="row">
        <div class="card p-2" style="width: 23rem;">
          <a href="{{ route ('unit', 'primerose_sentul') }}">
            <!-- <a href="{{ route ('unit') }}"> -->
            <img src="Assets/img/rumah2.svg" alt="" class="d-block w-100">
          </a>
          <div class="card-fasilitas mt-3 p-1">
            <span class="ms-3">
              <img src="Assets/img/icon_bathtub-f.svg" alt=""><sub class="ms-1">2</sub>
            </span>
            <span class="ms-3">
              <img src="Assets/img/icon_bed.svg" alt=""><sub class="ms-1" style="font-size: 18px;">2</sub>
            </span>
            <span class="ms-3">
              <img src="Assets/img/icon_luas.svg" alt=""><sub class="ms-1">2</sub>
            </span>
          </div>

          <div class="card-lokasi mt-4">
            <span>
              <img src="Assets/img/icon_lokasi.svg" alt="" style="width: 30px;"> <span style="font-weight: 500 ; font-size: 20px">Cadas Ngampar, Bogor</span>
            </span>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="card p-2" style="width: 23rem;">
          <a href="{{ route ('unit', 'bintaro_residence') }}">
            <!-- <a href="{{ route ('unit') }}"> -->
            <img src="Assets/img/rumah3.svg" alt="" class="d-block w-100">
          </a>
          <div class="card-fasilitas mt-3 p-1">
            <span class="ms-3">
              <img src="Assets/img/icon_bathtub-f.svg" alt=""><sub class="ms-1">2</sub>
            </span>
            <span class="ms-3">
              <img src="Assets/img/icon_bed.svg" alt=""><sub class="ms-1" style="font-size: 18px;">2</sub>
            </span>
            <span class="ms-3">
              <img src="Assets/img/icon_luas.svg" alt=""><sub class="ms-1">2</sub>
            </span>
          </div>

          <div class="card-lokasi mt-4">
            <span>
              <img src="Assets/img/icon_lokasi.svg" alt="" style="width: 30px;"> <span style="font-weight: 500 ; font-size: 20px">Ciputat, Tangerang Selatan</span>
            </span>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>
</section>

<section id="deskripsi-rumah">
  <div class="container">
    <div class="card">
      <div class="row">
        <div class="col-5">
          <img src="Assets/img/future-home.svg" alt="" style="width: 400px;">
        </div>
        <div class="deskripsi col-5 p-2">
          <span>
            <h2 class="mt-5">Future House</h2>
          </span>
          <span>
            <h1>Bejo Residence</h1>
          </span>
          <span>
            <p>We believe that when you have a home, you have everything you need. What keeps you there is the warmth.</p>
          </span>
          <button type="button" class="btn btn-outline-danger">Details</button>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="fasilitas-rumah">
  <div class="container mt-5">
    <div class="card">
      <div class="row">
        <div class="col-6 p-4 d-flex flex-column">
          <span class="mb-3">
            <img src="Assets/img/icon-mobil.svg" alt="" style="width: 60px;"> <span class="ms-4">Feel Safe</span>
          </span>
          <span class="mb-3">
            <img src="Assets/img/icon-bed.svg" alt="" style="width: 60px;"> <span class="ms-4">Always support</span>
          </span>
          <span class="mb-3">
            <img src="Assets/img/icon-shower.svg" alt="" style="width: 60px;"> <span class="ms-4">Makes you relax</span>
          </span>
          <span class="mb-3">
            <img src="Assets/img/icon-maps.svg" alt="" style="width: 60px;"><span class="ms-4">Strategic area</span>
          </span>
        </div>
        <div class="col-6 p-4 mx-auto">
          <span>
            <img src="Assets/img/atap-rumah.svg" alt="" class="position-absolute end-1" style="width: 520px;">
          </span>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="hero-bawah">
  <div class="container h-100 mt-5">
    <div class="hero-bawah" style="background-image: url('./Assets/img/home-content.svg');">
      <div class="color-overlay d-flex justify-content-center align-items-center">
        <span>
          <h1 class="fw-bold text-center">ARE YOU LOOKING FOR A PLACE TO RENT?</h1>
          <p class="text-center">Rent your new home while saving for your dream home!</p>
          <div class="text-center">
            <button type="button" class="btn btn-danger">Details</button>
          </div>
        </span>
      </div>
    </div>
  </div>
</section>

<section id="agents">
  <div class="container mt-4">
    <div class="row">
      <div class="agent">
        <h2 class="text-center">Our Agents</h2>
        <p class="text-center">Start by choosing one to showcase your properties!</p>
      </div>
      <div class="profile-agent col-4">
        <img src="Assets/img/agen1.svg" alt="" class="rounded mx-auto d-block">
        <h2 class="text-center">Jenny Soeya</h2>
        <p class="text-center">Real Estate Agent</p>
      </div>
      <div class="profile-agent col-4">
        <img src="Assets/img/agen2.svg" alt="" class="rounded mx-auto d-block">
        <h2 class="text-center">Simon Jess</h2>
        <p class="text-center">Real Estate Agent</p>
      </div>

      <div class="profile-agent col-4">
        <img src="Assets/img/agen3.svg" alt="" class="rounded mx-auto d-block">
        <h2 class="text-center">Conway Colin</h2>
        <p class="text-center">Real Estate Agent</p>
      </div>
    </div>
  </div>
</section>

<section id="footer">
  <div class="container mt-4">
    <div class="row">
      <div class="footer col-4 mt-4">
        <span>
          <img src="Assets/img/homindo white.svg" alt="" class="mb-3">
          <p>There is nothing more important than a good, safe, secure place get back to.</p>
        </span>
      </div>
      <div class="footer col-4 mt-4">
        <span>
          <h3>Contact</h3>
          <i class="fa-solid fa-phone mb-4 me-2"></i> (+62) 81234567890 <br>
          <i class="fa-solid fa-envelope mb-4 me-2"></i> homindo@property.com <br>
          <i class="fa-solid fa-location-dot mb-4 me-2"></i> Main Street, Kapuk Road.
          No 20-23, 57281.
          Jakarta Utara
        </span>
      </div>
      <div class="footer col-4 mt-4">
        <img src="Assets/img/image-footer.svg" alt="">
      </div>
      <div class="footer col-12 mt-3 mb-3">
        <h5 class="text-center">Copyright ©2022 All rights reserved | This template is made by Homindo Property</h5>
      </div>
    </div>

  </div>
</section>
@endsection