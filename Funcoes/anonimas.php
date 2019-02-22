<?php


function test($callback)
{
    $callback();
}

test(function(){

    echo "terminou";

});

$mostrar = function ($a)
{
    echo $a;
};

echo "<br>";
$mostrar("oi");

 ?>
