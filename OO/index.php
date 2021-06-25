<?php

require "pessoa.php";

$pessoa1 = new Pessoa('Wesley', 30);
$pessoa2 = new Pessoa('Maria', 18);

echo $pessoa1->correr(100);

require 'produto.php';
require 'tenis.php';

$produto1 = new Tenis();
