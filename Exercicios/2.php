<?php

function medirArray($res){

    $res = array_sum($res);

    if($res <= 100){
        return $res;
    }
    return 'Valor maior que 100!!';
}

function medirArray2($valor){
   
    $total = 0;
    
    foreach ($valor as $valores) {
        $total += $valores;
    }
    if($total <= 100){
        return $total;
    }
    return 'Valor maior que 100!!';
}
    
echo medirArray([20,20,20]);    
echo '<br>';
echo medirArray2([1,3,4,5,6,4,4,4,4,4,44,16,1]);


  
