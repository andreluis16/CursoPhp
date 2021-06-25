<?php session_start(); 

    require 'functions/functions.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Restrita</title>
</head>
<body>
    <?php echo (logado()) ? 'Você tem acesso' : 'Você nao tem acesso';?>

</body>
</html>