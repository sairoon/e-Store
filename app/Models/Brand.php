<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    private static $brand, $image, $imgNewName, $directory, $imgUrl;

    public static function newBrand($request){
        if($request->cat_id){
            self::$brand = Brand::find($request->brnd_id);
        }else{
            self::$brand = new Brand();
        }
        self::$brand->brand_name=$request->brand_name;
        if($request->file('image')){
            if(self::$brand->image){
                if(file_exists(self::$brand->image)){
                    unlink(self::$brand->image);
                }
            }
            self::$brand->image=self::getImgUrl($request);
        }
        self::$brand->save();
    }
    private static function getImgUrl($request){
        self::$image = $request->file('image');
        self::$imgNewName=rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory='adminAsset/brnd_image/';
        self::$imgUrl=self::$directory.self::$imgNewName;
        self::$image->move(self::$directory, self::$imgNewName);
        return self::$imgUrl;
    }
    public static function brandStatus($id){
        self::$brand = Brand::find($id);
        if(self::$brand->status == 1){
            self::$brand->status = 0;
        }else{
            self::$brand->status = 1;
        }
        self::$brand->save();
    }
    public static function brandDelete($request){
        self::$brand = Brand::find($request->brnd_id);
        if(self::$brand->image){
            if(file_exists(self::$brand->image)){
                unlink(self::$brand->image);
            }
        }
        self::$brand->delete();
    }
}
