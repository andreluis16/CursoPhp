<?php

if(isset($_POST)){

    $nome = $_FILES['arquivo']['name'];
    $temporario = $_FILES['arquivo']['tmp_name'];
    $tipo = $_FILES['arquivo']["type"];


    // if($tipo == 'image/jpeg'){
    //     move_uploaded_file($temporario,'arquivos/'.$nome);
    // }

    $extensoesAceitas = ['png', 'jpeg', 'jpg'];
    $extensao = pathinfo($nome,PATHINFO_EXTENSION);

    if(in_array($extensao,$extensoesAceitas)){
        if(move_uploaded_file($temporario,'arquivos/'.uniqid().'.'.$extensao)){
            echo 'Upload feito';  
        }
        echo 'Extensão nao aceita';
    }
}