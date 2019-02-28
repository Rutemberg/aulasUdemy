<?php


class Usuario
{

    private $idusuario;
    private $login;
    private $senha;
    private $dtcadastro;

    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function setDtcadastro($dtcadastro)
    {
        $this->dtcadastro = $dtcadastro;
    }

    public function getIdusuario()
    {
        return $this->idusuario;
    }

    public function getLogin()
    {
        return $this->login;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function getDtcadastro()
    {
        return $this->dtcadastro;
    }

    public function loadById($id)
    {
        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_usuario WHERE idusuario = :ID", array(
            ":ID" => $id
        ));

        if (count($result) > 0) {
            $row = $result[0];

            $this->setIdusuario($row['idusuario']);
            $this->setLogin($row['login']);
            $this->setSenha($row['senha']);
            $this->setDtcadastro(new DateTime($row['dtcadastro']));

        }
    }

    public function __toString()
    {
        return json_encode(array(
            "idusuario" => $this->getIdusuario(),
            "Login" => $this->getLogin(),
            "Senha" => $this->getSenha(),
            "dtcadastro" => $this->getDtcadastro()->format("d/m/Y H:i:s")
        ));
    }
}



 ?>
