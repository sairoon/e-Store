<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\OtherImage;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;
    public function index(){
        return view('admin.product.product',[
            'categories'=>Category::where('status',1)->get(),
            'sub_categories'=>SubCategory::where('status',1)->get(),
            'brands'=>Brand::where('status',1)->get(),
        ]);
    }
    public function createProduct(Request $request){
        $this->product = Product::newProduct($request);
        OtherImage::newOtherImage($request, $this->product->id);
        return back()->with('message','save product successfully');
    }
    public function manageProduct(){
        return view('admin.product.manage',[
            'products' => Product::all()
        ]);
    }
    public function detailProduct($id){
        return view('admin.product.detail-product', [
            'product' => Product::find($id)
        ]);
    }
    public function editProduct(){
        return view('admin.product.edit-product');
    }
    public function updateProduct(){

    }
    public function deleteProduct(){

    }

}
