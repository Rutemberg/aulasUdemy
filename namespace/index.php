<?php

require_once("config.php");

//use para chamar o namespace
use Cliente\Cadastro;

$pessoa = new Cadastro();
$pessoa->setNome("Rutemberg");
$pessoa->setEmail("Rut@email.com");
$pessoa->setSenha("123456");
$pessoa->registrarVenda();

//echo $pessoa;
 ?>
