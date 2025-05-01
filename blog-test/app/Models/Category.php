<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static $category, $image, $imageNewName, $directory;

    public static function saveCategory($request)
    {
        self::$category = new Category();
        self::$category->category_name = $request->category_name;
        self::$category->image = self::saveImage($request);
        self::$category->save();
    }

    private static function saveImage($request)
    {
        self::$image = $request->file('image');
        self::$imageNewName = 'Category-' . rand() . '.' . self::$image->getClientOriginalExtension();
        self::$directory = "admin-assets/uploaded-images/category/";
        self::$image->move(self::$directory, self::$imageNewName);
        return self::$directory . self::$imageNewName;
    }
}
