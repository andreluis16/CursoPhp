<?php

function page($page){
    

    if(!$page){
        require 'pages/home.php';
    }else{
        require 'pages/'.$page.'.php'; 
    }
    
}