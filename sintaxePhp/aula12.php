<?php
$cursos = ['php sem medo', 'laravel', 'Php orientado a objetos', 'cabeça'];
$numeroCursosArray = count($cursos);
$i = 0;

do{
    echo 'Eu estou vendo o curso '.$cursos[$i].'<br>';
    $i++;
}while ($i < $numeroCursosArray);