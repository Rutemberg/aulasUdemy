<?php


$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuario (login, senha) VALUES (:LOGIN, :SENHA)");

$login = "Jorge";
$senha = "987456";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);

$stmt->execute();

echo "Inserido no banco";
 ?>
