<?php

require '../config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);

    $user = new App\Models\Site\User;
    // $attributes = [

    //     'name' => $name,
    //     'email' => $email

    // ];

    // $cadastrado = $user->create($attributes);

    $user->name = $name;
    $user->email = $email;

    $cadastrado = $user->save();

    if($cadastrado){
        header('location: /cursophp/ORM');
    }
     
}