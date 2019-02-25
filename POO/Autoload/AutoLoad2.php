<?php

function incluirClasses($nome_classe)
{
    if (file_exists("$nome_classe.php") === true) {
        require_once "$nome_classe.php";
    }
}

spl_autoload_register("incluirClasses");
spl_autoload_register(
        function($nome_classe){
            if (file_exists("Abstratas". DIRECTORY_SEPARATOR ."$nome_classe.php") === true) {
                require_once "Abstratas". DIRECTORY_SEPARATOR ."$nome_classe.php";
            }
        }
);

//$carro = new DelRey();
//$carro->acelerar(155);
 ?>
