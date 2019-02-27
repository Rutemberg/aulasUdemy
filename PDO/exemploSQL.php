<?php

// tipo de banco:nome do banco;host, usuario, senha;
$conn = new PDO("sqlsrv:database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");

$stmt = $conn->prepare("SELECT * FROM tb_usuario ORDER BY idusuario");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//echo json_encode($results);

foreach ($results as $row) {
    foreach ($row as $key => $value) {
        echo "<strong>" . $key . ": </strong>" . $value ."<br>";
    }

    echo "<hr>";
}

 ?>
