@extends('admin.master')
@section('title')
    Manage Product
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 grid-margin">
            <div class="card border-1">
                <div class="card-header">
                    <h4 class="text-center font-weight-light">Manage Product</h4>
                    <p class="text-center text-success"></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th> Sl No </th>
                                <th> Product Name </th>
                                <th> Category Name </th>
                                <th> Image </th>
                                <th> Selling Price </th>
                                <th> Status </th>
                                <th> Action </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->product_name }}</td>
                                    <td>{{ $product->category->category_name }}</td>
                                    <td>
                                        <img src="{{ asset($product->image) }}" alt="" style="height: 50px; width: 50px;">
                                    </td>
                                    <td>{{ $product->selling_price }}</td>
                                    <td>
                                        @if($product->status == 1) Published @else Unpublished @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('product-details',['id'=>$product->id]) }}" class="btn btn-outline-info">Detail</a>
                                        <a href="{{ route('product-edit',['id'=>$product->id]) }}" class="btn btn-outline-primary">Edit</a>
                                        <a href="{{ route('product-delete',['id'=>$product->id]) }}" class="btn btn-outline-danger">Delete</a>
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
