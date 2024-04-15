<?php

namespace App\Models;

//use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use function Symfony\Component\String\s;

class Product extends Model
{
    use HasFactory;

    private static $product, $imgUrl, $image, $imgNewName, $directory;
    private static function getImgUrl($request){
        self::$image = $request->file('image');
        self::$imgNewName=rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory='adminAsset/product_image/';
        self::$imgUrl=self::$directory.self::$imgNewName;
        self::$image->move(self::$directory, self::$imgNewName);
        return self::$imgUrl;
    }
    public static function newProduct($request){
        self::$product = new Product();
        self::$product->category_id = $request->category_id;
        self::$product->subcategory_id = $request->subcategory_id;
        self::$product->brand_id = $request->brand_id;
        self::$product->product_name = $request->product_name;
        self::$product->product_code = $request->product_code;
        self::$product->short_description = $request->short_description;
        self::$product->long_description = $request->long_description;
        self::$product->regular_price = $request->regular_price;
        self::$product->selling_price = $request->selling_price;
        self::$product->stock_amount = $request->stock_amount;
        self::$product->image = self::getImgUrl($request);
        self::$product->save();
        return self::$product;
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function subcategory(){
        return $this->belongsTo(SubCategory::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function otherImages(){
        return $this->hasMany(OtherImage::class);
    }
}
