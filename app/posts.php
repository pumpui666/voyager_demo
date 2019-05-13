<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    //
    public static function findByslug($slug){
        return static::where('slug',$slug)->join('contacts', 'users.id', '=', 'contacts.user_id')->first();
    }
    public static function testDB($slug){
        return static::where('slug',$slug)->first();
    }
    public static function pagenotfound($slug){
        if(!empty($slug)){

            return false;
        }
        return static::where('slug',$slug)->first();

    }
}
