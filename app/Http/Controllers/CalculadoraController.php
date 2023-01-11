<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function soma10($num){
        $soma = $num + 10;
        
        return $soma;
    }

    public function soma($num1, $num2)
    {
        $soma = $num1 + $num2;
        //return view('soma', ['soma' => $soma]);
        return view('soma', compact('soma'));
    }

    public function calculadora(){
        return view('calculadora');
    }

    public function calcular(Request $request){

        $num1 = $request->num1;
        $operador = $request->operador;
        $num2 = $request->num2;

        switch($operador){
            case '+':
                $resultado = $num1 + $num2;
                break;
            case '-':
                $resultado = $num1 - $num2;
                break;
            case '*':
                $resultado = $num1 * $num2;
                break;
            case '/':
                $resultado = $num1 / $num2;
                break;
        }

        return view('resultado', compact('resultado'));
    }
}
