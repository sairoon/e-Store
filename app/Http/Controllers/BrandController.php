<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        return view('admin.brand.brand',[
            'brands'=>Brand::all(),
        ]);
    }
    public function createBrand(Request $request){
        Brand::newBrand($request);
        return back()->with('message','brand save successfully');
        if($request->brnd_id){
            return redirect(route('brand-add'))->with('message','information update successfully');
        }
        else {
            return redirect(route('brand-add'))->with('message','save successfully');
        }
    }

    public function statusBrand($id){
        Brand::brandStatus($id);
        return back()->with('message','status information updated');
    }
    public function deleteBrand(Request $request){
        Brand::brandDelete($request);
        return back()->with('message','delete successfully');
    }
    public function editBrand($id){
        return view('admin.brand.edit-brand',[
            'brands'=>Brand::all(),
            'brand'=>Brand::find($id),
        ]);
    }
}
