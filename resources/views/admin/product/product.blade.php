@extends('admin.master')
@section('title')
    Add Product
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 grid-margin stretch-card">
                <div class="card border-1">
                    <div class="card-header">
                        <h4 class="text-center font-weight-light">Add Product Form</h4>
                        <p class="text-center text-success">{{ session('message') }}</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('product-create')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Category Name</label>
                                <div class="col-md-9">
                                    <select required name="category_id" class="form-control">
                                        <option value="" disabled selected>Select product category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">SubCategory Name</label>
                                <div class="col-md-9">
                                    <select required name="subcategory_id" class="form-control">
                                        <option value="" disabled selected>Select product subcategory</option>
                                        @foreach($sub_categories as $sub_category)
                                            <option value="{{ $sub_category->id }}">{{ $sub_category->subcategory_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Brand Name</label>
                                <div class="col-md-9">
                                    <select required name="brand_id" class="form-control">
                                        <option value="" disabled selected>Select product brand</option>
                                        @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Name</label>
                                <div class="col-md-9">
                                    <input type="text" placeholder="Product Name" name="product_name" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Code</label>
                                <div class="col-md-9">
                                    <input type="text" placeholder="Product Code" name="product_code" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Short Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" placeholder="Short Description" name="short_description"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Long Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control " placeholder="Long description" name="long_description"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Price</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <input type="number" placeholder="Product regular price" name="regular_price" class="form-control">
                                        <input type="number" placeholder="Product selling price" name="selling_price" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Stock Amount</label>
                                <div class="col-md-9">
                                    <input type="number" placeholder="Stock Amount" name="stock_amount" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Image</label>
                                <div class="col-md-9">
                                    <input type="file" placeholder="Product Image" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Other Images</label>
                                <div class="col-md-9">
                                    <input type="file" name="other_image[]" class="form-control" multiple/>
                                </div>
                            </div>

                            <div class="col-md-10">
                                <div class="">
                                    <input value="Create New Product" type="submit" class="btn btn-outline-success"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

