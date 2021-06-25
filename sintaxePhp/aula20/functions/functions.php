<?php
function curso($nomeCurso){
    if($nomeCurso != 'php'){
        throw new Exception('O nome do curso não é php');
    }

    
}