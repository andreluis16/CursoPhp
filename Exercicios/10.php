<?php
    if(isset($_POST['numeros'])){
        $numeros = explode(',', $_POST['numeros']);
        
        asort($numeros);
        $i = 1;
        foreach($numeros as $key => $numero){
            echo $numero.'<br>';
        
        if($i == 5){
            echo 'Stop';
            die();
        }
        $i++;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10</title>
</head>
<body>
    <form action="" method="POST">

        <input type="text" name="numeros">
        <button type="submit">Mostrar</button>

    </form>
    
</body>
</html>