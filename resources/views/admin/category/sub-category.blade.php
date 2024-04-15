@extends('admin.master')
@section('title')
    Sub-Category
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 grid-margin stretch-card">
                <div class="card border-1">
                    <div class="card-header">
                        <h4 class="text-center font-weight-light">Create Sub-Category</h4>
                        <p class="text-center text-success">{{ session('message') }}</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('sub-category')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="mb-3 mb-md-0">
                                        <select name="category_id" class="form-control">
                                            <option value="">Select a category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input class="form-control" name="subcategory_name" type="text" placeholder="Sub-category name"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="">
                                    <button type="submit" class="btn btn-outline-primary">Submit</button>
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
                        <h4 class="text-center font-weight-light">Manage Sub-Category</h4>
                        <p class="text-center text-success">{{ session('message') }}</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th> Sl No </th>
                                    <th> Category Name </th>
                                    <th> Sub-category Name </th>
                                    <th> Status </th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($subcategories as $subCategory)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $subCategory->category_name }}</td>
                                        <td>{{ $subCategory->subcategory_name }}</td>
                                        <td>{{ $subCategory->status == 1 ? 'Active' : 'Inactive'}}</td>
                                        <td>
                                            <a href="{{ route('sub-edit',['id'=>$subCategory->id]) }}" class="btn btn-outline-primary">Edit</a>
                                            @if($subCategory->status == 1)
                                                <a href="{{ route('sub-status',['id'=>$subCategory->id]) }}" class="btn btn-outline-warning">Inactive</a>
                                            @else
                                                <a href="{{ route('sub-status',['id'=>$subCategory->id]) }}" class="btn btn-outline-success">Active</a>
                                            @endif
                                            <form action="{{route('sub-delete')}}" method="post">
                                                @csrf
                                                <input type="hidden" value="{{ $subCategory->id }}" name="cat_id">
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

