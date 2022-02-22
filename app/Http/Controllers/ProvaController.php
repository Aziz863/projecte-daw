<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvaController extends Controller
{
    //
    public function salutacio()
    {
        echo 'Hola';
    }

    public function ordinadors($codi)
    {
//        return view('prova')->with('codi', $codi);  //forma 1
//        return view('prova',['codi'=>$codi]);  //forma 2
        return view('prova', compact('codi'));  //forma 3
    }

    public function temps()
    {
        $temperatures = [12, 14, 18, 22];
        return view('temps')->with('temperatures', $temperatures);
    }

}
