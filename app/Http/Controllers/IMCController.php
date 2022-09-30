<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CalculoDeIMC;
use App\Models\CalculoDeIMCC as ModelsCalculoDeIMCC;


class IMCController extends Controller
{
    public function index() {
        return view('dadosimc');
    }

    public function imc(){
        $CalculoDeIMCC = new ModelsCalculoDeIMCC();
        $resultado = $CalculoDeIMCC->dados();

        return view('resultado', compact('resultado'));
    }
}
