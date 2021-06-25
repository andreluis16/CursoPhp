<?php
function sacarBanco($saldo,$valorSacar){

if( $saldo > $valorSacar){
    return 'Você pode sacar o valor '.$valorSacar;
}
return 'Você não pode sacar o valor '.$valorSacar;
}

echo sacarBanco(1000,2000);