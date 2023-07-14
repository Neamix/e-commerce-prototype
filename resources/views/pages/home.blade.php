@extends('layouts.master')

@section('content')
<!-- Start: ADS Slider -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/placeholder1920x720.png') }}" class="d-block w-100" alt="placeholder">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/placeholder1920x720.png') }}" class="d-block w-100" alt="placeholder">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/placeholder1920x720.png') }}" class="d-block w-100" alt="placeholder">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- End: ADS Slider -->

<!-- Start: ADS Slider -->

<!-- End: ADS Slider -->

<!-- Start: Offers Products -->
  <section class="container mt-3">
    <x-products.offers-carousel-component></x-products.offers-carousel-component>
  </section>
<!-- End: Offers Products -->

<!-- Start: Just Arrived Products -->
<section class="container mt-3">
  <x-products.just-arrived-carousel-component></x-products.just-arrived-carousel-component>
</section>
<!-- End: Offers Products -->

<!-- Start: Brands -->
<section class="container mt-3">
  <x-brand-carousel-component></x-brand-carousel-component>
</section>
<!-- End: Brands -->

<!-- Start: Most Viewed Products -->
<section class="container mt-3">
  <x-products.most-viewed-carousel-component></x-products.most-viewed-carousel-component>
</section>
<!-- End: Offers Products -->
@endsection


