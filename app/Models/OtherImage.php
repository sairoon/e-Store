<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherImage extends Model
{
    use HasFactory;

    private static $otherImage, $otherImages, $image, $imageName, $directory, $imgUrl, $extension;

    private static function getImgUrl($image)
    {
        self::$extension = $image->getClientOriginalExtension();
        self::$imageName = rand(1000, 2000).'.'.self::$extension; // 132131.jpg
        self::$directory = 'adminAsset/product-other-images/';
        $image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }
    public static function newOtherImage($request, $id){
        foreach ($request->other_image as $image) {
            self::$otherImage = new OtherImage();
            self::$otherImage->product_id = $id;
            self::$otherImage->image = self::getImgUrl($image);
            self::$otherImage->save();
        }
    }

}
