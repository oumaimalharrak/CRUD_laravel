<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function products($category= null, $item= null) {
    
        if(isset($category)){
            if(isset($item)){
                return "<h1>{$item}</h1>";
            }
            return "<h1>{$category}</h1>";
        }
        return view('products');
    }

    public function contact(){
        return view('contact');
    }
    
    
}
