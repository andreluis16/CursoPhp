
<?php require 'functions/pagina.php'  ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta -eq content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QueryStrings</title>
</head>
<body>

    <div class="btn-group">
        <a class="btn btn-default" href="/" role="button">Inicio</a>
        <a class="btn btn-default" href="?pag=posts" role="button">Posts</a>
        <a class="btn btn-default" href="?pag=users" role="button">Users</a>
    </div>


    <div id="container">

        <?php
        
            if(isset($_GET['pag'])){

                mudarPagina($_GET['pag']);
                
            }else{
                require 'paginas/home.php';
            }
        ?>
    
      
    
    </div>
    
</body>
</html>