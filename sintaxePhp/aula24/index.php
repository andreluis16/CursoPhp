<?php

//saida é gerada imediatamente quando executamos o curl

// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL,'http://www.globoesporte.com');
// curl_setopt($curl, CURLOPT_FOLLOWLOCATION,true);
// curl_exec($curl);
// curl_close($curl);

// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL,'http://www.globoesporte.com');
// curl_setopt($curl, CURLOPT_FOLLOWLOCATION,true);
// curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
// $retorno = curl_exec($curl);
// curl_close($curl);

// echo str_replace('FUTEBOL','caralho',$retorno);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL,'http://www.globoesporte.com');
curl_setopt($curl, CURLOPT_FOLLOWLOCATION,true);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
$retorno = curl_exec($curl);
curl_close($curl);

echo str_replace('CHELSEA','caralho',$retorno);



