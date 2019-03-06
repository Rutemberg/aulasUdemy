<?php

//reiniciar id de sessao toda vez que o usuario logar
session_start();

session_destroy();

session_start();

$_SESSION["nome"] = "Rutemberg";

session_regenerate_id();

echo session_id();

var_dump($_SESSION["nome"]);


 ?>
