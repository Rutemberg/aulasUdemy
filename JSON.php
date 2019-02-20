<?php

$Pessoas = array();

array_push($Pessoas, array(
    'nome' => "Joao",
    'idade' => 18
));

array_push($Pessoas, array(
    'nome' => "Claber",
    'idade' => 25
));

/*Array para JSON*/
echo json_encode($Pessoas);

////////////////////////////////////////

echo "<hr>";

$json = '[{"nome":"Joao","idade":18},{"nome":"Claber","idade":25}]';

/*JSON para Array*/
$data = json_decode($json, true);

var_dump($data);
 ?>
