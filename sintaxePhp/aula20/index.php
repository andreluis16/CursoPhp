<?php

require 'functions/functions.php';

ini_set('display_errors',1);

try{

curso('laravel');

}catch(Exception $e){
  //  echo $e->getMessage();
  var_dump($e);
}