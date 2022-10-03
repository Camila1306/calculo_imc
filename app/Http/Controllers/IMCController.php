<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalculoDeIMCC;


class IMCController extends Controller
{
    public function index() {
        return view('saude');
    }

    public function dadosimc() {
        return view('dadosimc');
    }

    public function imc(){
        $CalculoDeIMCC = new CalculoDeIMCC();
        $resultadoimc = $CalculoDeIMCC->imc();

        return view('imc', compact('resultadoimc'));
    }

    public function dadossono() {
        return view('dadossono');
    }

    public function sono(){
        $CalculoDeIMCC = new CalculoDeIMCC();
        $resultadosono = $CalculoDeIMCC->sono();

        return view('sono', compact('resultadosono'));
    }
}
