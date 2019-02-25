<?php

/**
 *
 */
class Pessoa
{
    public $name;

    public function falar()
    {
        return "Meu nome é: ".$this->name;
    }
}

$rutemberg = new Pessoa();
$rutemberg->name = "Rutemberg";
echo $rutemberg->falar();


 ?>
