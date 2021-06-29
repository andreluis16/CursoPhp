<?php

$nomes = ['grau', 'peixe', 'vaca', 'boi', 'krai', 'kraio'];

foreach($nomes as $key => $nome){
    if($key == 4){
        echo 'so ate aqui';
        die();
    }else{
        echo $nome.'<br>';
    }
}