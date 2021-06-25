<?php

$valorSacar = 100000;
$saldoNoBanco = 10000;

if($valorSacar>$saldoNoBanco){
    echo 'Voce nao tem limite para sacar '.$valorSacar;
}else if($valorSacar == $saldoNoBanco){
    echo 'Se voce sacar esse valor '.$valorSacar. ', Voce ficara sem dinheiro';
}else{
    echo 'Voce pode sacar';
}