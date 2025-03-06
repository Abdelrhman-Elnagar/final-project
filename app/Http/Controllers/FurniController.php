<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FurniController extends Controller
{
    public function index(){
        return view('site.furni.index');
    }

    public function about(){
        return view('site.furni.about');
    }

    public function blog(){
        return view('site.furni.blog');
    }

    public function cart(){
        return view('site.furni.cart');
    }

    public function checkout(){
        return view('site.furni.checkout');
    }

    public function contact(){
        return view('site.furni.shop');
    }

    public function services(){
        return view('site.furni.shop');
    }

    public function shop(){
        return view('site.furni.shop');
    }

    public function thankyou(){
        return view('site.furni.thankyou');
    }
}
