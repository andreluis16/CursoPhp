<?php

function maiorValor1($tresNumeros){
    
    rsort($tresNumeros);
    foreach ($tresNumeros as $key => $value) {
        if($key == 0){
            echo 'Maior valor é '.$tresNumeros[0];
        }
    }
}

function maiorValor2($tresNumeros){
    $maior = max($tresNumeros);
    echo 'Maior valor é '.$maior;
}

echo MaiorValor1([100, 50, 202, 400 , 600, 1001]);
echo '<br>';
echo MaiorValor2([10, 50, 30]);