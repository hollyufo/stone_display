@extends('layouts.front')
@section('title','Home')
@section('css')
    
@endsection
@section('content')   
<!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="caption">
              <h2>Best quality Fossile from Morocco</h2>
              <div class="line-dec"></div>
              <p>we make different handmade decorations made from stones and different material <strong>50 products</strong> also jewelry made from stones like eye of the tiger or quarts. 
              <br><br>Check our facebook page <a rel="nofollow" href="https://www.facebook.com">name</a></p>
              <div class="main-button">
                <a href="#">Order Now!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <!-- Featured Starts Here -->
    <div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Featured Items</h1>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel owl-theme">
              @foreach ($products as $key => $product)
                <a href="{{ route("front.product",[$product->id,$product->name]) }}">
                  <div class="featured-item">
                    <img src="{{$product->thumbnail}}" alt="{{$product->name}}">
                    <h4>{{$product->name}}</h4>
                  </div>
                </a>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Featred Ends Here -->


    <!-- Subscribe Form Starts Here -->
    <!-- Subscribe Form Ends Here -->
    @endsection
    @section('js')
        
    @endsection