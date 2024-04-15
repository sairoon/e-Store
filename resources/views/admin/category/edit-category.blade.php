@extends('admin.master')
@section('title')
   Edit-Category
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 grid-margin stretch-card">
                <div class="card border-1">
                    <div class="card-header">
                        <h4 class="text-center font-weight-light">Update Category</h4>
                        <p class="text-center text-success">{{ session('message') }}</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('category')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $category->id }}" name="cat_id"/>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="mb-3 mb-md-0">
                                        <input class="form-control" value="{{ $category->category_name }}" name="category_name" placeholder="category name" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="">
                                        <input class="form-control" name="image" type="file"/>
                                        <img src="{{ asset($category->image) }}" alt="" style=" height: 50px; width: 50px;">
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

