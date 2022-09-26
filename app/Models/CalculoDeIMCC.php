<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculoDeIMCC extends Model
{
    use HasFactory;

    public function nome(){
        return $_GET['iNome'];
    }
    public function anos(){
        $nascimento = $_GET['iNascimento'];
        $data = new DateTime($nascimento);
        $resultado = $data->diff(new DateTime(date('d-m-Y')));

        $anos = $resultado->format('%Y');
        
        return $anos;
    }
    public function altura(){
        return $_GET['iAltura'];
    }
    public function peso(){
        return $_GET['iPeso'];
    }
    public function imc(){
        $peso = $_GET['iPeso'];
        $altura = $_GET['iAltura'];

        $imc = $peso/($altura*$altura);

        return $imc;
    }
    public function classificado(){
        $peso = $_GET['iPeso'];
        $altura = $_GET['iAltura'];

        $classificado = "";

        $imc = $peso/($altura*$altura);

        if($imc<18.5){
            $classificado = "Abaixo do Peso";
        } elseif($imc<24.9){
            $classificado = "Peso normal";
        } elseif($imc<29.9){
            $classificado = "Sobrepeso";
        } elseif($imc<34.9){
            $classificado = "Obesidade grau 1";
        } elseif($imc<39.9){
            $classificado = "Obesidade grau 2";
        } else{
            $classificado = "Obesidade grau 3";
        }

        return $classificado;
    }
}
