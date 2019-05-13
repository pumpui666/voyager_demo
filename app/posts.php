<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    //
    public static function findByslug($slug){
        return static::where('slug',$slug)->first();
    }
    public static function findByName($slug){
        return static::where('slug',$slug)->first();
    }
    public static function pagenotfound($slug){
        if(!empty($slug)){

            return false;
        }
        return static::where('slug',$slug)->first();

    }
}
