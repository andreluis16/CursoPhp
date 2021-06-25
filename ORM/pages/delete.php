<?php

require '../config.php';

if(isset($_GET['id'])){

    $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
    $user = new \App\Models\Site\User;
    $userEncontrado = $user->find($id);
    if($userEncontrado->delete()){
        header('location: /cursophp/ORM');
    }

}