<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?php
    $encriptarCookie = base64_encode('php sem medo');

        setcookie('curso',$encriptarCookie, time()+3600);
       // unset($_COOKIE['curso']);
        echo base64_decode($_COOKIE['curso']);
    ?>

</body>
</html>