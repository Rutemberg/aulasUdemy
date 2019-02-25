<?php

//padrao nome da pasta
namespace Cliente;

//contrabarra volta na pasta raiz e encontra a classe Cadastro
class Cadastro extends \Cadastro
{

    public function registrarVenda()
    {
        echo "Foi resgistrada uma venda para o cliente: " . $this->getNome();
    }

}


 ?>
