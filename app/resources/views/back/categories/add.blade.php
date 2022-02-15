
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
        <div class="table-responsive border rounded my-3 p-2">
            <table class="table table-striped table-hover">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a href="{{ route("admin.categories.edit",$category->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route("admin.categories.delete",$category->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection

@section('js')

@endsection
