<?php

//função que retorna os argumentos MUUTO UTIL
function ola()
{
    $argumentos = func_get_args();
    return $argumentos;
}

var_dump(ola("Olá","Bom dia"));


 ?>
