<?php

function calculo1($numero1,$numero2){

    $res = $numero1 + $numero2;
    return $res * $numero1;
}
function calculo2($numero1,$numero2){

    return ($numero1 + $numero2)*$numero1;
    
}

echo calculo1(3,3);
echo '<br>';
echo calculo2(4,3);