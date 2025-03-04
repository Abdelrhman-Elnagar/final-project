<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BossController extends Controller
{
    public function index(){
        return view('site/boss/index');
    }
}
