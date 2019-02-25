<?php

/**
 *
 */
class Pessoa
{

    public $name = "Rutemberg";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados()
    {
        echo get_class($this)."<br>";
        echo "$this->name <br>";
        echo "$this->idade <br>";
        echo "$this->senha <br>";

    }
}

/**
 *
 */
class Programador extends Pessoa
{
    public function verDados()
    {
        echo get_class($this)."<br>";
        echo "$this->name <br>";
        echo "$this->idade <br>";
        
        //atributo privado da class Pessoa
        echo "$this->senha <br>";

    }
}


$pessoa = new Pessoa();

//se a função for publica entao retornara todos os dados em publico
$pessoa->verDados();

echo "<hr>";

$pessoa = new Programador();

$pessoa->verDados();
 ?>
