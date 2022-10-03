<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculoDeIMCC extends Model
{
    use HasFactory;

    function idade($nascimento){
        $data = new DateTime($nascimento);
        $resultado = $data->diff(new DateTime(date('d-m-Y')));
        $idade = $resultado->format('%Y');

        return $idade; 
    }
    
    function calcula_imc($peso, $altura){
        return round($peso/($altura*$altura));

    }
    function classificado($imc){
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

    function classifica_sono($sono, $idade){
        if ($idade<=0.03) {
            if($sono<14){
                $msono = "Precisa dormir mais!";
            } elseif($sono<=17){
                $msono = "Qualidade de sono Ok!";
            } else {
                $msono = "Cuidado! Diminua a quantidade de horas dormidas!";
            }
        } elseif ($idade >=0.04 && $idade<=0.11){
            if($sono<12){
                $msono = "Precisa dormir mais!";
            } elseif($sono<=15){
                $msono = "Qualidade de sono Ok!";
            } else {
                $msono = "Cuidado! Diminua a quantidade de horas dormidas!";
            }
        } elseif ($idade<=2){
            if($sono<11){
                $msono = "Precisa dormir mais!";
            } elseif($sono<=14){
                $msono = "Qualidade de sono Ok!";
            } else {
                $msono = "Cuidado! Diminua a quantidade de horas dormidas!";
            }
        } elseif ($idade<=5){
            if($sono<10){
                $msono = "Precisa dormir mais!";
            } elseif($sono<=13){
                $msono = "Qualidade de sono Ok!";
            } else {
                $msono = "Cuidado! Diminua a quantidade de horas dormidas!";
            }
        } elseif ($idade<=13) {
            if($sono<9){
                $msono = "Precisa dormir mais!";
            } elseif($sono<=11){
                $msono = "Qualidade de sono Ok!";
            } else {
                $msono = "Cuidado! Diminua a quantidade de horas dormidas!";
            }
        } elseif ($idade<=17){
            if($sono<8){
                $msono = "Precisa dormir mais!";
            } elseif($sono<=10){
                $msono = "Qualidade de sono Ok!";
            } else {
                $msono = "Cuidado! Diminua a quantidade de horas dormidas!";
            }
        } elseif ($idade<=64){
            if($sono<7){
                $msono = "Precisa dormir mais!";
            } elseif($sono<=9){
                $msono = "Qualidade de sono Ok!";
            } else {
                $msono = "Cuidado! Diminua a quantidade de horas dormidas!";
            }
        } else {
            if($sono<7){
                $msono = "Precisa dormir mais!";
            } elseif($sono<=8){
                $msono = "Qualidade de sono Ok!";
            } else {
                $msono = "Cuidado! Diminua a quantidade de horas dormidas!";
            }
        }

        return $msono;

    }

    public function imc() {
        $valores["nome"] = $_GET["iNome"];
        $valores["peso"] = $_GET["iPeso"];
        $valores["altura"] = $_GET["iAltura"];
        $valores["idade"] = $this->idade($_GET["iNascimento"]);
        $valores["imc"] = $this->calcula_imc($valores["iPeso"], $valores["iAltura"]);
        $valores["classificado"] = $this->classificado($valores["imc"]);
        return $valores;
    }

    public function sono() {
        $valores["nome"] = $_GET['iNome'];
        $valores["idade"] = $_GET["iIdade"];
        $valores["sono"] = $_GET["iSono"];
        $valores["msono"] = $this->classifica_sono($valores["sono"], $valores["idade"]);

        return $valores;
    }
}
