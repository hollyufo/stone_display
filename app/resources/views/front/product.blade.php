@extends('layouts.front')
@section('title','product - '.$product->name)
@section('css')
  <link rel="stylesheet" href="{{ asset("assets/css/flex-slider.css")}}">
@endsection
@section('content')
<!-- Page Content -->
<!-- Single Starts Here -->
    <div class="single-product">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Prodcut: {{$product->name}}</h1>
            </div>
          </div>
          <div class="col-md-6">
            <div class="product-slider">
              <div id="slider" class="flexslider">
                <ul class="slides">
                  <li>
                    <img src="{{asset("storage/".$product->thumbnail)}}" class="img img-responsive w-100" />
                  </li>
                  @foreach ($product->gallery as $key => $value)
                    <li>
                      <img src="{{asset("storage/".$value)}}" class="img img-responsive w-100" />
                    </li>
                  @endforeach
                    <!-- items mirrored twice, total of 12 -->
                  </ul>
                </div>
                <div id="carousel" class="flexslider">
                  <ul class="slides">
                    <li>
                      <img src="{{asset("storage/".$product->thumbnail)}}" class="img img-responsive w-100" />
                    </li>
                    @foreach ($product->gallery as $key => $value)
                      <li>
                        <img src="{{ asset("storage/".$value) }}" class="img img-responsive w-100" />
                      </li>
                    @endforeach
                      <!-- items mirrored twice, total of 12 -->
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="right-content">
                  <h4>{{$product->name}}</h4>
                  <p>{{ $product->description }}</p>
                  <span>min order of {{ $product->min_order }} piece</span>
                  <p>dementions : <span>{{ $product->dimentions[0] }}x{{ $product->dimentions[1] }}x{{ $product->dimentions[2] }}</span></p>
              <a href="{{route("front.contact")}}" type="submit" class="button">Order Now!</a>
              <div class="down-content">
                <div class="categories">
                  <h6>Category: <span>{{ $product->category->name }}</span></h6>
                </div>
                <div class="share">
                  <h6>Share: <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></span></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Single Page Ends Here -->


    <!-- Similar Starts Here -->
    <div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>You May Also Like</h1>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel owl-theme">
              @foreach ($related as $key => $product)
                <a href="{{ route("front.product",[$product->id,$product->name]) }}">
                  <div class="featured-item">
                    <img src="{{asset("storage/".$product->thumbnail)}}" alt="{{$product->name}}">
                    <h4>{{$product->name}}</h4>
                  </div>
                </a>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Similar Ends Here -->


    <!-- Subscribe Form Starts Here -->
    <div class="subscribe-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Subscribe on PIXIE now!</h1>
            </div>
          </div>
          <div class="col-md-8 offset-md-2">
            <div class="main-content">
              <p>Godard four dollar toast prism, authentic heirloom raw denim messenger bag gochujang put a bird on it celiac readymade vice.</p>
              <div class="container">
                <form id="subscribe" action="" method="get">
                  <div class="row">
                    <div class="col-md-7">
                      <fieldset>
                        <input name="email" type="text" class="form-control" id="email"
                        onfocus="if(this.value == 'Your Email...') { this.value = ''; }"
                        onBlur="if(this.value == '') { this.value = 'Your Email...';}"
                        value="Your Email..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-5">
                      <fieldset>
                        <button type="submit" id="form-submit" class="button">Subscribe Now!</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Subscribe Form Ends Here -->
    @endsection
@section('js')
<script src="{{asset("assets/js/isotope.js")}}"></script>
<script src="{{asset("assets/js/flex-slider.js")}}"></script>
@endsection
