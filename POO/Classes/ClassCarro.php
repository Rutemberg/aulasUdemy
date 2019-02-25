<?php

/**
 *
 */
class Carro
{

    private $modelo;
    private $motor;
    private $ano;

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function setMotor($motor)
    {
        $this->motor = $motor;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    public function getAno():int
    {
        return $this->ano;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getmotor():float
    {
        return $this->motor;
    }

    public function exibir()
    {
        return array(
            'Motor' => $this->getmotor(),
            'Ano' => $this->getAno(),
            'Modelo' => $this->getModelo()
        );
    }

}

$carro = new Carro();
$carro->setAno("1970");
$carro->setModelo("Gol GT");
$carro->setMotor("1.8");

var_dump($carro->exibir());


 ?>
