<?php

abstract class Animal
{
        public function falar()
        {
            return "Som";
        }

        public function mover()
        {
            return "Anda";
        }
}

class Cachorro extends Animal
{
    public function falar()
    {
        return "Late";
    }
}

class Gato extends Animal
{
    public function falar()
    {
        return "Mia";
    }
}

class Passaro extends Animal
{
    public function falar()
    {
        return "Pia";
    }
    public function mover()
    {
        //invoca o metodo original da classe abstrata
        return "Voa e " . parent::mover();
    }
}

$animal = new Cachorro();
echo $animal->falar()."<br>";
echo $animal->mover()."<br>";

echo "<hr>";

$animal = new Gato();
echo $animal->falar()."<br>";
echo $animal->mover()."<br>";

echo "<hr>";

$animal = new Passaro();
echo $animal->falar()."<br>";
echo $animal->mover()."<br>";
 ?>
