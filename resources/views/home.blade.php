@extends('layouts.app')

@section('title','Beranda | TRAVINGJOG')

@section('content')

<!-- HERO -->
<section class="hero-section d-flex align-items-center justify-content-center text-white text-center"
         style="height:100vh;">
  <div class="container">
    <h1 class="fw-bold mb-3 animate-fade">
      Jelajahi Yogyakarta Bersama Kami
    </h1>
    <p class="lead mb-4 animate-fade">
      Temukan destinasi, penginapan, dan kuliner terbaik hanya di TRAVINGJOG
    </p>
    <a href="#menu"
       class="btn btn-warning btn-lg rounded-pill px-4 py-2 animate-slide">
       Jelajahi Sekarang
    </a>
  </div>
</section>


<!-- HERO SLIDER SCRIPT -->
@push('scripts')
<script>
const heroSection = document.querySelector('.hero-section');
const backgrounds = [
  '{{ asset("images/breksi.jpg") }}',
  '{{ asset("images/hero-jogja.jpg") }}',
  '{{ asset("images/heha.jpg") }}',
  '{{ asset("images/malioboro.jpg") }}'
];
let index = 0;

heroSection.style.backgroundImage = `url('${backgrounds[0]}')`;
heroSection.style.backgroundSize = "cover";
heroSection.style.backgroundPosition = "center";

setInterval(() => {
  index = (index + 1) % backgrounds.length;
  heroSection.style.backgroundImage = `url('${backgrounds[index]}')`;
}, 3000);
</script>
@endpush

<!-- INTRO -->
<main class="container pb-5">
<section class="text-center my-5">
  <h2 class="fw-bold">Eksplorasi Yogyakarta</h2>
  <p class="text-muted">Kota budaya, alam dan kuliner yang selalu memikat hati.</p>
  <hr class="w-25 mx-auto">
</section>

<!-- MENU -->
<div class="row row-cols-1 row-cols-md-4 g-4 text-center" id="menu">
  <div class="col">
    <div class="card shadow h-100">
      <img src="{{ asset('images/prambanan.jpg') }}" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Wisata</h5>
        <p class="card-text">Tempat wisata menarik di Jogja.</p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card shadow h-100">
      <img src="{{ asset('images/grand-hotel-aston1') }}" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Hotel</h5>
        <p class="card-text">Penginapan nyaman & berkualitas.</p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card shadow h-100">
      <img src="{{ asset('images/dawet1.jpg') }}" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Kuliner</h5>
        <p class="card-text">Kuliner khas Yogyakarta.</p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card shadow h-100">
      <img src="{{ asset('images/paket-wisata.jpg') }}" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Paket Wisata</h5>
        <p class="card-text">Liburan seru bersama kami.</p>
      </div>
    </div>
  </div>
</div>
</main>

@endsection
