
@extends('layouts.back')
@section('title','add product')

@section('css')
    
@endsection

@section('content')
<div class="container">
    <div class="three">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            Products added successfully
        </div>
    @endif
        <form class="four" action="{{ route("admin.product.add.post") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Product name</label>
                <input name="name" value="{{ old('name') }}" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Product discreption</label>
                <input type="text" name="description" value="{{ old('description') }}" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Min order</label>
                <input type="text" name="min_order" value="{{ old('min_order') }}" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
              </div>
              <div class="row">
                  <label for="formGroupExampleInput2" class="form-label">Dimentions:</label>
                    <div class="mb-3 col-md-4">
                        <input type="text" name="dimentions[0]" value="{{ old('dimentions[0]') }}" class="form-control" id="formGroupExampleInput2" placeholder="width">
                      </div>
                    <div class="mb-3 col-md-4">
                        <input type="text" name="dimentions[1]" value="{{ old('dimentions[1]') }}" class="form-control" id="formGroupExampleInput2" placeholder="height">
                      </div>
                    <div class="mb-3 col-md-4">
                        <input type="text" name="dimentions[2]" value="{{ old('dimentions[2]') }}" class="form-control" id="formGroupExampleInput2" placeholder="depth">
                      </div>
              </div>
              <div class="mb-3">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Thumbnail</label>
                    <input class="form-control" name="thumbnail" type="file" id="formFile">
                  </div>
                  <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Other pics</label>
                    <input class="form-control" name="gallery[]" type="file" id="formFileMultiple" multiple>
                  </div>
              </div>
              <div class="mb-3">
                <select name="category" class="form-select" aria-label="Default select example">
                    <option selected disabled>Select category...</option>
                    @foreach ($categories as $category)
                         <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
              </div>
            <button type="submit" class="btn btn-primary btn-lg">Save</button>
        </form>
    </div>

</div>
@endsection

@section('js')
    
@endsection