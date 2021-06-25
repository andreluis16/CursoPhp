<?php

use Symfony\Component\Yaml\Dumper;

require 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href=".//public/assets/css/styles.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css' integrity='sha512-4uGZHpbDliNxiAv/QzZNo/yb2FtAX+qiDb7ypBWiEdJQX8Pugp8M6il5SRkN8jQrDLWsh3rrPDSXRf3DwFYM6g==' crossorigin='anonymous'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css' integrity='sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==' crossorigin='anonymous'/>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPActiveRecord</title>
</head>
<body>

    <div id="borda" class="row">

        <div id="box" class="col-lg-3 col-lg-offset-4" >

        <?php
           
           $page = filter_input(INPUT_GET,'p',FILTER_SANITIZE_STRING);

            page($page);

        ?>

        </div>

    </div>
    
</body>
</html>