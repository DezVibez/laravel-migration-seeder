<?php

namespace App\Http\Controllers;



class PageController extends Controller
{
    public function index(){
        return view('home');
    }


    public function treni(){

        $trains = [[
            'ID' => 1,
            'Azienda' => 'Fiat',
            'Stazione di partenza' => 'Milano',
            'Stazione di arrivo' => 'Napoli',
            'Orario di partenza' => '14.00',
            'Orario di arrivo' => '21.00',
            'Codice Treno' => "544090",
            'Numero Carrozze' => "27",
            'In orario' => "No",
            'Cancellato' =>'No'
        ],
        [
            'ID' => 2,
            'Azienda' => 'Google',
            'Stazione di partenza' => 'Napoli',
            'Stazione di arrivo' => 'Milano',
            'Orario di partenza' => '14.00',
            'Orario di arrivo' => '21.00',
            'Codice Treno' => "544059",
            'Numero Carrozze' => "26",
            'In orario' => "No",
            'Cancellato' =>'No'
            ]];

        return view('treni', compact('trains'));
    }
}
