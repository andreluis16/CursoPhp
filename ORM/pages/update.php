<?php

require '../config.php';

if(isset($_GET)){

    $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
    $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);

    $user = new \App\Models\Site\User;

    $userEncontrado = $user->find($id);

    $attributes = [

        'name' => $name,
        'email' => $email
    ];

    $atualizado = $userEncontrado->update_attributes($attributes);

    if($atualizado){

        header('location: /cursophp/ORM');

    }
}