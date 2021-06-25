<?php

    if(isset($_POST['cep'])){
        $cep = $_POST['cep'];
        
        $pattern = '/[0-9]{5}\-[0-9]{3}/';

        if(preg_match($pattern,$cep,$match)){
            echo 'o cep esta correto '.$match[0];
        }else{
            echo 'o cep esta incorreto, o que voc~e digitou foi '.$cep.' e o correto é 00000-000';
        }
    }

?>
    
<form action="" method="POST">
    <label>CEP</label>
    <input type="text" name="cep">
    <input type="submit" value="verificar cep">
</form>