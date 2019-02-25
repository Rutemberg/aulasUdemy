<?php

spl_autoload_register(function($nome_classe){

    //var_dump($nome_classe);
    $dir_class = "classe";
    $filename = $dir_class . DIRECTORY_SEPARATOR . $nome_classe . ".php";

    if (file_exists($filename)) {
        require_once($filename);
    }

})

 ?>
