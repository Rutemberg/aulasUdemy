<?php

//$file = fopen("log.txt", "w+");//cria, apagar e reescreve
$file = fopen("log.txt", "a+");//escreve adicionando ao final do arquivo
fwrite($file, date("d/m/Y H:i:s") . "\r\n");
fclose($file);

 ?>
