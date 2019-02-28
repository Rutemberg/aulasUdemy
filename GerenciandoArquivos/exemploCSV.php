<?php

require_once("config.php");

$sql = new Sql();
$resultado = $sql->select("SELECT * FROM tb_usuario ORDER BY login");

$headers = array();

foreach ($resultado[0] as $key => $value) {
    array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");
fwrite($file, implode(",", $headers));
 ?>
