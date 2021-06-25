<?php

$meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro' ];

foreach ($meses as $key => $mes) {
    
        $numeroMes = $key + 1;

        if(strlen($numeroMes) == 1 ){
            $numeroMes = '0'.$numeroMes;
        }

        echo 'Mês '.$numeroMes.' '.$mes.'<br>';

    
}