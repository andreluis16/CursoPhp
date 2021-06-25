<?php

define('CURSO','php sem medo');

echo CURSO;

$curso = CURSO;

echo $curso;
echo '<br>';
//operadores de atribuiçao
// += -= *= /= .=

$valor1 = 30;
//$valor1 += 50; //$valor1 = $valor1 + 50
//$valor1 *= 50; //$valor1 = $valor1 * 50
$valor1 /= 50; //$valor1 = $valor1 / 50
echo '<br>';
echo $valor1;

$nome = 'Andre';
$nome .= 'Luis';
echo '<br>';
echo $nome;

//Operadores de Comparação
// == === != > <

$numero = '10';
$numero2 = 10;
echo '<br>';
var_dump($numero == $numero2);
echo '<br>';
var_dump($numero === $numero2);
echo '<br>';
var_dump($numero != $numero2);

//Operador de controle de erro
// @

$curs;
echo '<br>';
echo @$curs;
@var_dump($curs);

//Operadores logicos
// AND OR || !
$x = 100;
$y = 300;
$name = 'Rudz';

$AND = ($x != $y) AND ($x < $y);
var_dump($AND);

//$OR = ($x < $y) OR ($x != $y);
$OR = ($x < $y) || ($x != $y);
var_dump($OR);
print($OR);
