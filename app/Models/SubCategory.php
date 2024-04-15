<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    private static $subCategory;

    public static function saveSubCategory($request){
        if($request->cat_id){
            self::$subCategory = Category::find($request->cat_id);
        }else{
            self::$subCategory = new SubCategory();
        }
        self::$subCategory->category_id = $request->category_id;
        self::$subCategory->subcategory_name= $request->subcategory_name;
        self::$subCategory->save();
    }
    public static function status($id){
        self::$subCategory = SubCategory::find($id);
        if(self::$subCategory->status == 1){
            self::$subCategory->status = 0;
        }else{
            self::$subCategory->status = 1;
        }
        self::$subCategory->save();
    }
    public static function categoryDelete($request){
        self::$subCategory = SubCategory::find($request->cat_id);
        self::$subCategory->delete();
    }
    public static function updateSubCategory($request, $id){
        self::$subCategory = SubCategory::find($id);
        self::$subCategory->category_id = $request->category_id;
        self::$subCategory->subcategory_name = $request->subcategory_name;
        self::$subCategory->save();
    }
}
