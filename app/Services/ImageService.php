<?php
namespace App\Services;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ImageService {

    public static $public_path = "public/";
    
    public static function saveImage($image, $folder)
    {

        $img = Image::make($image->path())->resize(200, 200, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->encode('jpg');

        $path = time() . rand(1000, 9999) . '.' . $image->extension();

        Storage::disk('public')->put($folder . "//thumbnails/".$path, $img);

        //$path = Storage::putFile('public/images/thumbnails', $img->__toString());

        //$path = $request->file('feature_image')->store('public/images');
        
        Storage::putFileAs(self::$public_path . $folder, $image, $path);
        //$path = Storage::putFile('public/images', $request->file('feature_image'));

        return $path;


    }
}