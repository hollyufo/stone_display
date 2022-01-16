@extends('layouts.front')
@section('title','products')
@section('css')
  <link rel="stylesheet" href="{{ asset("assets/css/flex-slider.css")}}">
@endsection
@section('content')
    <!-- Page Content -->
    <!-- Items Starts Here -->
    <div class="featured-page">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Featured Items</h1>
            </div>
          </div>
          <div class="col-md-8 col-sm-12">
            <div id="filters" class="button-group">
              {{-- <button class="btn btn-primary" data-filter="*">All Products</button>
              <button class="btn btn-primary" data-filter=".new">Newest</button> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="featured container no-gutter">

        <div class="row posts">
            @foreach ($products as $key => $product)
              <div id="{{ $product->id }}" class="item new col-md-4">
                <a href="{{ route("front.product",[$product->id,$product->name]) }}">
                  <div class="featured-item">
                    <img src="<?= $product['thumbnail'] ?>" alt="<?= $product['name'] ?>">
                    <h4><?= $product['name'] ?></h4>
                  </div>
                </a>
              </div>
            @endforeach
        </div>
    </div>
    <div class="page-navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            {!! $products->links() !!}
          </div>
        </div>
      </div>
    </div>
    <!-- Featred Page Ends Here -->


    <!-- Subscribe Form Starts Here -->

    <!-- Subscribe Form Ends Here -->


    @endsection
    @section('js')
    @endsection