<?php 

$tres = 3;
$res = $tres * 1;
echo 'Multiplicando 3 Por 1 = '.$res.'<br>';

for($i = 0;$i<=10;$i++){

    $res = $tres * $res;
    $total = $tres * $res;
    echo  'Multiplicando '.$tres.' Por '.$res.' = '.$total.'<br>';

}