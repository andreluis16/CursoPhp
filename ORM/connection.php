<?php

$cfg = ActiveRecord\Config::instance();
$cfg->set_model_directory(__DIR__.'/App/Models');
$cfg->set_connections(array('development' =>
 'mysql://root:@localhost/loja_phpoo'));