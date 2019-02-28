<?php


require_once("config.php");

//Seleciona todos os usuarios
/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuario");
echo json_encode($usuarios);
*/

//seleciona apenas um
/*
$usuario = new Usuario();
$usuario->loadById(1);
echo $usuario;
*/

//seleciona uma lista
/*
$lista = Usuario::listall();
echo json_encode($lista);
*/

//carrega lista de usuario pelo LOGIN
/*
$search = Usuario::search("e");
echo json_encode($search);
*/

//faz LOGIN
/*
$usuario = new Usuario();
$usuario->login("Emanuel", "123456");
echo $usuario;
*/

//insere no banco
/*
$aluno = new Usuario("Max", "55@#$745");
$aluno->insert();
echo $aluno;
*/

//Atualiza no banco
/*
$usuario = new Usuario();
$usuario->loadById(5);
$usuario->update("Luiz", "1234558777");
echo $usuario;
*/

$usuario = new Usuario();
$usuario->loadById(5);
$usuario->delete();

echo $usuario;
 ?>
