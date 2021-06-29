<?php

$palavra = 'Palavra';
$numero = 10;

for($i = 1;$i <= $numero;$i++){
        echo str_repeat($palavra.' ',$i).'<br>';
}