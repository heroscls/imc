<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImcController extends Controller
{

    public function imc(Request $request){
        $peso = $request->peso;
        $altura = $request->altura;

        $imc = $peso / ($altura * $altura);
        $resultado;

        if ($imc >= 30){
            $resultado = 'Obesidade';
        }
        else if ($imc > 25){
            $resultado = 'Sobrepeso';
        }
        else if ($imc > 18.5){
            $resultado = 'Normal';
        }
        else {
            $resultado = "Abaixo do Peso";
        }

        return view('imc', ['imc' => $imc, 'resultado' => $resultado]);
    }
}
