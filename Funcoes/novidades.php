<?php

//       tipo de dado    retorna tipo de dado
function soma(int ...$valores):string
{
    return array_sum($valores);
}

echo soma(1,20,30,5,10)."<br>";
var_dump(soma(1,20,30,5,10));

 ?>
