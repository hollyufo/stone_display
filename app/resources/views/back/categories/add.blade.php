
@extends('layouts.back')
@section('title','add category')

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
            Category added successfully
        </div>
    @endif
        <form class="four" action="{{ route("admin.categories.add.post") }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Category name</label>
                <input name="name" value="{{ old('name') }}" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
              </div>
            <button type="submit" class="btn btn-primary btn-lg">Save</button>
        </form>
    </div>

</div>
@endsection

@section('js')
    
@endsection