<?php

$dir_name = "images";

if (!is_dir($dir_name)) {
    mkdir($dir_name);
    echo "Pasta $dir_name criada com sucesso";
} else {
    rmdir($dir_name);
    echo "Pasta já existe";
}



 ?>
