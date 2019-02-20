<?php


$array = array("laranja", "uva", "Beterraba");

print_r($array);

/////////////////////////////////////////////

echo "<hr>";

$arrayBi[0][0] = "Gm";
$arrayBi[0][1] = "Camaro";
$arrayBi[0][2] = "Uno";
$arrayBi[0][3] = "Fiesta";

echo end($arrayBi[0]);

////////////////////////////////////////////

echo "<hr>";

$Pessoas = array();

array_push($Pessoas, array(
    'nome' => "Joao",
    'idade' => 18
));


print_r($Pessoas[0]['nome']);

 ?>
