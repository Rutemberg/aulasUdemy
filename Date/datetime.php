<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf8", "portuguese");

echo ucwords(strftime("%A, %d de %B de %Y"));

///////////////////////////////////////////////////////

echo "<hr>";
echo date("d/m/Y H:i:s", 1550850260);
echo "<hr>";
echo time();

echo "<hr>";

//$ts =  strtotime('2001-09-11');
$ts =  strtotime('+1 day');



echo date("l, d/m/Y", $ts);
 ?>
