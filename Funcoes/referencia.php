<?php

$a = 10;
//Troca de valor por referencia por & atras da variavel
function trocaDeValor(&$a)
{
    $a = 50;
    return $a;
}

echo trocaDeValor($a)."<br>";
echo $a."<hr>";

//////////////////////////////////////////////////

$pessoa = array("Nome" => "Rutemberg", "Idade" => 20);

foreach ($pessoa as &$value) {

    if(gettype($value) === "integer") $value += 10;
        echo $value."<br>";
}

var_dump($pessoa);
 ?>
