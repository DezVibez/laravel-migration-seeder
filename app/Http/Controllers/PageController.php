<?php

namespace App\Http\Controllers;



class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function treni(){
        return view('treni');
    }
}
