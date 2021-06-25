<?php
//ARRAYS

$nome = 'Rudz';

$nomes = [ 'Rudz', 'Andre', 'Kelryn', 'Vrau'];

$filmes = [ 'terror' => 'panico', 'fantasia' => 'senhor dos aneis'];

//print_r($filmes);

//print_r($nomes[1]);

//$filmes['terror'] = 'o massacre da serra eletrica';
//$terror = $filmes['terror'];

//echo $terror;

$livros = [
    'ficcao' => ['o senhor dos aneis','harry potter'],
    'terror' => ['vampiro' => 'livro de vampiro', 'bixo' => 'livro de bixo']
];

print_r($livros['terror']['vampiro']);