<?php

if(isset($_COOKIE['NOME_DO_COOKIE'])){

    $obj = json_decode($_COOKIE['NOME_DO_COOKIE']);//está em objeto, se quiser como array entao adicione o parametro true

    echo $obj->Empresa;
}

 ?>
