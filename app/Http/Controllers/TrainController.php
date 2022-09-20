<?php

namespace App\Http\Controllers;

use App\Train;

class TrainController extends Controller
{
    public function index(){

        $trains = [];
        return view('trains.index', compact('trains'));
    }
}
