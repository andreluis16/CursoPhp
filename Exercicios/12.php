<?php

function multa($velocidadeMotirista){

    $velocidadeMaxima = 100;
    if($velocidadeMotirista <= $velocidadeMaxima){
        echo 'esta dentro do limite de velocidade sua velocidade é: '.$velocidadeMotirista;
    }elseif($velocidadeMotirista <= 110){
        echo 'excedeu o limite de: '.$velocidadeMaxima.' sua velocidade é: '.$velocidadeMotirista.' deve pagar uma multa de 50$'; 
    }elseif($velocidadeMotirista <= 130){
        echo 'excedeu o limite de: '.$velocidadeMaxima.' sua velocidade é: '.$velocidadeMotirista.' deve pagar uma multa de 100$';
    }else{
        echo 'excedeu o limite de: '.$velocidadeMaxima.' sua velocidade é: '.$velocidadeMotirista.' deve pagar uma multa de 200$';
    }
    
}

echo multa(140);