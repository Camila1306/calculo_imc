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
        $nome = $CalculoDeIMCC->nome();
        $anos = $CalculoDeIMCC->anos();
        $altura = $CalculoDeIMCC->altura();
        $peso = $CalculoDeIMCC->peso();
        $imc = $CalculoDeIMCC->imc();
        $classificado = $CalculoDeIMCC->classificado();

        return view('resultado', ['nome'=>$nome, 'anos'=>$anos, 'altura'=>$altura, 'peso'=>$peso, 'imc'=>$imc, 'classificado'=>$classificado]);
    }
}
