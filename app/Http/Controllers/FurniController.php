<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FurniController extends Controller
{
    public function index(){
        return view('site.furni.index');
    }
}
