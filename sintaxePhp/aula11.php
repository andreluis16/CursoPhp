<?php

$heavy = ['ironMaiden', 'metalica', 'systemOfADown'];
$numero = count($heavy);

for($i = 0;$i<$numero;$i++){
    echo $heavy[$i];
    echo '<br>';
}
echo "<br>";
$cursos = ['php sem medo', 'laravel', 'Php orientado a objetos', 'cabeça'];

foreach ($cursos as $key =>$curso) {
    echo 'indice '.$key.' ';
    echo $curso.'<br>';
}