<?php


$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuario SET login = :LOGIN, senha = :SENHA WHERE idusuario = :ID");

$login = "Joao";
$senha = "qwerty";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Alterado no banco";
 ?>
