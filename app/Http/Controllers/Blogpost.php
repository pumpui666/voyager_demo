<?php

namespace App\Http\Controllers;
use App\posts; //use model
use Illuminate\Http\Request;

class blogpost extends Controller
{
    //
    public function index(){
        $data  = [];
        // echo "<pre>"; var_dump(posts::all());die;
        $data['posts'] =  posts::simplePaginate(2);
        return view('welcome',$data);
    }
    public function show($slug){
        $post = posts::findByslug($slug);
        return view('postShow',['post'=> $post]);
    }
}
