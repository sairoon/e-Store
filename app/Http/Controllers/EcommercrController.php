<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class EcommercrController extends Controller
{

    public function index(){
        return view('frontEnd.home.home', [
            'new_arrivals' => Product::where('status', 1)->orderBy('id', 'desc')->take(10)->get(),
            'brands'          => Brand::all(),
            'home_categories' => Category::where('home_status', 1)->get(),

        ]);
    }
    public function store($id){
        return view('frontEnd.shop.shop', [
            'products' => Product::where('category_id', $id)->orderBy('id', 'desc')->get()
        ]);
    }
    public function details($id){
        return view('frontEnd.shop.product-detail', [
            'product' => Product::find($id),
        ]);
    }
    public function aboutUs(){
        return view('frontEnd.about.about');
    }
    public function contactUs(){
        return view('frontEnd.contact.contact');
    }
    public function wishlist(){
        return view('frontEnd.shop.wishlist');
    }
    public function cart(){
        return view('frontEnd.cart.cart');
    }
    public function checkout(){
        return view('frontEnd.checkout.checkout');
    }
    public function faq(){
        return view('frontEnd.faq.faq');
    }
}
