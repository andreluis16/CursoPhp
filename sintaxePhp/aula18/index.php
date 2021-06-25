<?php

// $arquivo = fopen('log.txt', 'w');
// $texto = "Father is on \n";
// $texto2 = "Father is on 2";


// fwrite($arquivo,$texto);
// fwrite($arquivo,$texto2);
// fclose($arquivo);

//     $arquivo = fopen('log.txt', 'a');
    
//     $texto = "Father is on \n";
//     $texto2 = "Father is on 2";

//     fwrite($arquivo,$texto2);
//     fclose($arquivo);

if(is_file('log.txt')){

    $conteudoLog = file_get_contents('log.txt');
    echo nl2br($conteudoLog);

}


