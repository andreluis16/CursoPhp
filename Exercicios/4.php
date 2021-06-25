<?php

function organizarArray($array){
    
    echo 'Valores não repetidos: ';
    $valoresNaoRepetidos = array_unique($array);
    foreach ($valoresNaoRepetidos as $value) {
        echo $value.', ';     
    }
    echo '<br>Quantidade de valores não repetidos: ';
    echo count($valoresNaoRepetidos);
    echo '<br><br>
    
    ';
    $valoresRepetidos = array_unique( array_diff_assoc( $array, array_unique( $array ) ) );
        echo 'Valores repetidos: ';
  
        foreach($valoresRepetidos as $resul){
        
        echo $resul.', ';
        }
        echo '<br>Quantidade de valores repetidos: ';
        echo count($valoresRepetidos);
}  

echo organizarArray(['rudz','rudz1','rudz','rudz2','rudz3','rudz2']);












