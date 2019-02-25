<?php

/**
 *
 */
class Endereco
{

    private $cidade;
    private $rua;
    private $numero;

    public function __construct($a,$b,$c)
    {
            $this->cidade = $a;
            $this->rua = $b;
            $this->numero = $c;

    }

    public function __destruct()
    {
        //var_dump("DESTRUIDO");
    }

    public function __toString()
    {
        return "$this->cidade, $this->rua - $this->numero";
    }
}

$meuendereco = new Endereco("Ceilandia", "Qnn 19 conjuto D", "21");
echo $meuendereco;

 ?>
