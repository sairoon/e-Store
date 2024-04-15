<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.category',[
            'categories'=>Category::all(),
        ]);
    }
    public function saveCategory(Request $request){
        Category::saveCategory($request);
       if($request->cat_id){
           return redirect(route('category'))->with('message','information update successfully');
       }
       else {
           return redirect(route('category'))->with('message','save successfully');
       }
    }
    public function status($id){
        Category::status($id);
        return back()->with('message','status information updated');
    }
    public function categoryDelete(Request $request){
        Category::categoryDelete($request);
        return back()->with('message','delete successfully');
    }
    public function categoryEdit($id){
        return view('admin.category.edit-category',[
            'categories'=>Category::all(),
            'category'=>Category::find($id),
        ]);
    }
}
