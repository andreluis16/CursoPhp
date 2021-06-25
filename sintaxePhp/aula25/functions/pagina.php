<?php

define('DIRETORIO_PAGINAS', 'paginas/');

function mudarPagina($pagina){

    if(file_exists(DIRETORIO_PAGINAS.$pagina.'.php')){
        require DIRETORIO_PAGINAS .$pagina. '.php';
    }else{
        require DIRETORIO_PAGINAS .'erro.php';
    }
}