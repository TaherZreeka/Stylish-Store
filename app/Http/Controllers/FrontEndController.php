<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
     public function index(){

        return view('frontend.index');
    }
    public function category(){

        return view('frontend.category');
    }
    public function products(){

        return view('frontend.products');
    }
    public function cart(){

        return view('frontend.cart');
    }
    public function contact(){

        return view('frontend.contact');
    }
}