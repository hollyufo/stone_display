
@extends('layouts.back')
@section('title','add product')

@section('css')
    
@endsection

@section('content')
<div class="container admin-main ls1">
    <div class="cards1 row">
       @foreach ($products as $product)
       <div class=" col-md-3 p-2">
        <div class="card w-100" style="width: 18rem;">
      <img src="{{ asset("storage/".$product->thumbnail) }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
        <p class="card-text">{{ $product->description }}</p>
        <a href="{{ route("admin.product.update",$product->id) }}" class="btn btn-primary">Edit</a>
        <a href="{{ route("admin.product.delete",$product->id) }}" class="btn btn-danger">Delete</a>
      </div>
    </div>
</div>
       @endforeach        
    </div>
</div>

@endsection

@section('js')
    
@endsection