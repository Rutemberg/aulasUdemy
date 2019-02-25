<?php

//registra a função abaixo
spl_autoload_register(
    function($class_name){
        require_once("$class_name.php");
    }
);

$carro = new DelRey();
$carro->acelerar(155);

 ?>
