<?php
session_start();

var_dump(session_id());

if(!isset($_SESSION['nome'])){
    unset($_SESSION['nome']);
}

echo $_SESSION['nome'];