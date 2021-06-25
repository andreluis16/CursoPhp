<?php

//https://www.php.net/manual/pt_BR/book.spl.php

// $arquivos = new DirectoryIterator('pasta');

// foreach($arquivos as $arquivo){
//     if(!$arquivo->isDot() || !$arquivo->isDir()){
        
//         echo $arquivo->getFilename().'<br />';
//     }
// }   

$cursos = ['php', 'laravel', 'pagseguro'];

$array = new ArrayIterator($cursos);


while($array->valid()){

    echo $array->current();

    $array->next();
}