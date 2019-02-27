<?php


$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE idusuario = ?");

$id = 3;

$stmt->execute(array($id));

//$conn->rollBack();
$conn->commit();

echo "DELETADO";
 ?>
