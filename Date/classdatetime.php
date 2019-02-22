<?php


$dt = new DateTime();
$periodo = new DateInterval("P15M");

$dt->add($periodo);

echo $dt->format("d/m/Y");

////////////////////////////////////////////////

//calculo de dias e horas e anos
echo "<hr>";

$datainicio = new DateTime('11-05-2018 11:39');
$datafim = new DateTime('11-05-2019 12:45');
$tempo = $datainicio->diff($datafim);

echo $diaspassados = $tempo->format("%a dias")." ";
echo $horaspassadas =  $tempo->format("%H horas %I minutos %S segundos");

 ?>
