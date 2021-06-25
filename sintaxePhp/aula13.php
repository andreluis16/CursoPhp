<?php

//funções strings
//https://www.php.net/manual/pt_BR/ref.strings.php

$frase = 'Meu nome é grau
            rudz.com
            .br';
//$fraseNova = strtoupper($frase);
//echo $fraseNova;

$quebra = nl2br($frase);

echo $quebra;

//funções arrays
//https://www.php.net/manual/pt_BR/ref.array.php

$array = ['in', 'the', 'night',];
$preencherArray = array_fill_keys($array, 'grauuu');
print_r($preencherArray);

$array2 = ['a '];
array_push($array2, 'stand ','and ','fight');

for($i = 0; $i <4;$i++){
    echo $array2[$i];
}
