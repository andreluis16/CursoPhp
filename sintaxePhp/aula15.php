<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios Campos</title>
</head>
<body>

    <?php $cursos = ['php sem medo', 'laravel', 'integração com pagseguro']; ?>

    <form action="./includes/retorno2.php" method="POST">
    
        <label for="">Cursos</label>
            
            <select name="cusos" id="">

                <?php foreach ($cursos as $curso):?>
                <option><?php echo $curso ?></option>
                <?php endforeach;?>

            </select>   

        <input type="checkbox" name="PHP sem medo">PHP sem medo
        <input type="checkbox" name="Laravel">Laravel
        <input type="checkbox" name="Pagseguro">Pagseguro -->

        <input type="radio" name="PHP sem medo" value="PHP sem medo">PHP sem medo
        <input type="radio" name="Laravel" value="Laravel">Laravel
        <input type="radio" name="Pagseguro" value="Pagseguro">Pagseguro

        <input type="hidden" name="curso-oculto">

        <input type="submit" value="Cadastrar">   

    </form>
</body>
</html>