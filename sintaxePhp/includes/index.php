<?php session_start(); 
        var_dump(session_id());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessoes</title>
</head>
<body>
    <?php
        $_SESSION['nome'] = 'André';
    ?>
    
</body>
</html>