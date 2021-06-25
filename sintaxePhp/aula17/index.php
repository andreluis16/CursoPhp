<?php
session_start();

if(!isset($_SERVER['PHP_AUTH_USER'])){
    header('WWW-Authenticate: Basic realm="Sistema Login"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Cliquei no botao cancelar';
    die();
}else{
    if(($_SERVER['PHP_AUTH_USER'] == 'admin') && ($_SERVER['PHP_AUTH_PW']) == '123'){
        $_SESSION['logado'] = true;
        header('Location: restrita.php');
    }else{
        header('WWW-Authenticate: Basic realm="Sistema Login"');
        header('HTTP/1.0 401 Unauthorized');
        echo 'Usuario ou senha incorretos';
        die();
    }


}