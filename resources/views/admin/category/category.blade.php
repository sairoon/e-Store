@extends('admin.master')
@section('title')
    Category
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 grid-margin stretch-card">
                <div class="card border-1">
                    <div class="card-header">
                        <h4 class="text-center font-weight-light">Create Category</h4>
                        <p class="text-center text-success">{{ session('message') }}</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('category')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="mb-3 mb-md-0">
                                        <input class="form-control" name="category_name" placeholder="category name" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="">
                                        <input class="form-control" name="image" type="file">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="">
                                    <button type="submit" class="btn btn-primary btn-outline">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <hr>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-1">
                    <div class="card-header">
                        <h4 class="text-center font-weight-light">Manage Category</h4>
                        <p class="text-center text-success"></p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th> Sl No </th>
                                    <th> Category Name </th>
                                    <th> Image </th>
                                    <th> Status </th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->category_name }}</td>
                                    <td>
                                        <img src="{{ asset($category->image) }}" alt="" style="height: 100px; width: 100px;">
                                    </td>
                                    <td>{{ $category->status == 1 ? 'Active' : 'Inactive'}}</td>
                                    <td>
                                        <a href="{{ route('edit',['id'=>$category->id]) }}" class="btn btn-outline-primary">Edit</a>
                                        @if($category->status == 1)
                                        <a href="{{ route('status',['id'=>$category->id]) }}" class="btn btn-outline-warning">Inactive</a>
                                        @else
                                        <a href="{{ route('status',['id'=>$category->id]) }}" class="btn btn-outline-success">Active</a>
                                        @endif
                                        <form action="{{route('delete')}}" method="post">
                                            @csrf
                                            <input type="hidden" value="{{ $category->id }}" name="cat_id">
                                            <button class="btn btn-outline-danger" type="submit" onclick="return confirm('Do you want to delete this?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
