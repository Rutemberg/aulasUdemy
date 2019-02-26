<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error) {
    echo $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuario (login,senha) VALUES (?,?)");
$stmt->bind_param("ss", $login, $senha);
$login = "Emanuel";
$senha = "123456";
$stmt->execute();

$login = "Jorge";
$senha = "@#$%";
$stmt->execute();
?>
