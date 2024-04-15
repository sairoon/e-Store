@extends('admin.master')
@section('title')
    Edit-SubCategory
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 grid-margin stretch-card">
                <div class="card border-1">
                    <div class="card-header">
                        <h4 class="text-center font-weight-light">Edit SubCategory</h4>
                        <p class="text-center text-success">{{ session('message') }}</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update-subcategory',['id'=>$sub_category->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="mb-3 mb-md-0">
                                        <select name="category_id" class="form-control">
                                            <option value="">Select a category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->id == $sub_category->category_id ? 'selected' : ''}}>{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input class="form-control" value="{{ $sub_category->subcategory_name }}" name="subcategory_name" type="text" placeholder="Sub-category name"/>
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
@endsection

