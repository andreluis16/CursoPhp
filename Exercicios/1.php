<?php

function calcular($operador, $numero1, $numero2){

    if($operador == '+'){
        $res = $numero1 + $numero2;
    }
    elseif($operador == '-'){
        $res = $numero1 - $numero2;
    }
    elseif($operador == '*'){
        $res = $numero1 * $numero2;
    }
    elseif($operador == '/'){
        $res = $numero1 / $numero2;
    }else{
        echo 'operador não encontrado';
    }

    return $res;

}

echo calcular('*', 2, 5);