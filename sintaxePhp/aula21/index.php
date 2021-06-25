<?php

date_default_timezone_set('America/Sao_Paulo');

//echo date('d/m/Y H:i:s');

// echo date('d/m/Y', strtotime('+2day'));

// echo strtotime('+2day');

// echo date('d/m/Y', strtotime('+2years'));

// $data = '2020-12-12';

// echo date('d/m/Y', strtotime($data));


// $dataHoje = strtotime(date('Y-m-d'));
// $dataBanco = strtotime('2022-03-03');

// if($dataHoje > $dataBanco){
// echo 'data de hoje é maior';
// }else{
//     echo 'data de hoje não é maior que a do banco';
// }

// $data1 = new DateTime('now');
// $data2 = new DateTime('tomorrow +2days');

// $diferencaDias = $data1->diff($data2);

// echo $diferencaDias->format('%R%a dias');

// $data = new DateTime('2015-12-04');
// $data->add(new DateInterval('P10D'));

// var_dump($data->format('d/m/y'));

$data = new DateTime('2015-12-04');
$data->modify('+1 day');

echo $data->format('d/m/y');