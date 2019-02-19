<?php

$nome =  "rutemberg barbosa";

$nome = strtoupper($nome);
echo "$nome <hr>";

$nome = strtolower($nome);
echo "$nome <hr>";

$nome = ucfirst($nome);
echo "$nome <hr>";

$nome = ucwords($nome);
echo "$nome <hr>";

/////////////////////////////////////////////////

$empresa = "Hcode";

$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);

echo "$empresa <hr>";

/////////////////////////////////////////////////

$frase = "A repetição é a mãe da retenção";

$palavra = "mãe";

$q = strpos($frase, $palavra);
$texto = substr($frase, 0, $q);
//var_dump($texto);

$texto2 = substr($frase,$q + strlen($palavra), strlen($frase));
var_dump($texto2);
 ?>
