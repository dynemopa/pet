@extends('frontend.layout.main')
@section('main-container')

  <!-- gallery section -->
  <section class="gallery-section layout_padding">
    <div class="container">
      <h2>
        Our Gallery
      </h2>
    </div>
    <div class="container ">
      <div class="img_box box-1">
        <img src="{{asset('frontend/images/g-1.png')}}" alt="">
      </div>
      <div class="img_box box-2">
        <img src="{{asset('frontend/images/g-2.png')}}" alt="">
      </div>
      <div class="img_box box-3">
        <img src="{{asset('frontend/images/g-3.png')}}" alt="">
      </div>
      <div class="img_box box-4">
        <img src="{{asset('frontend/images/g-4.png')}}" alt="">
      </div>
      <div class="img_box box-5">
        <img src="{{asset('frontend/images/g-5.png')}}" alt="">
      </div>
    </div>
  </section>



  <!-- end gallery section -->

  @endsection