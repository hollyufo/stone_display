
@extends('layouts.back')
@section('title','categories')

@section('css')
    
@endsection

@section('content')
<div class="container admin-main ls1">
    <div class="row">
        <div class="col-md-12">
            <div class="cards">
                <table class="table border rounded p-3">
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
                                    <a href="{{ route("admin.categories.delete",$category->id) }}" class="badge bg-danger text-white">Delete</a>
                                    <a href="{{ route("admin.categories.edit",$category->id) }}" class="badge bg-primary text-white">Update</a>
                                </td>
                            </tr>
                        @endforeach        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
    
@endsection