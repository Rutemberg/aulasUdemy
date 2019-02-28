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
            $this->setData($result[0]);
        }
    }

    public static function listAll()
    {
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuario");
    }

    public static function search($login){
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuario WHERE login LIKE :LOGIN ORDER BY login", array(
            ":LOGIN" => "%$login%"
        ));
    }

    public function login($login, $senha)
    {
        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_usuario WHERE login = :LOGIN AND senha = :SENHA", array(
            ":LOGIN" => $login,
            ":SENHA" => $senha
        ));

        if (count($result) > 0) {
            $this->setData($result[0]);
        }
        else {
            throw new Exception("LOGIN INVALIDO", 1);

        }
    }

    public function setData($data)
    {
        $this->setIdusuario($data['idusuario']);
        $this->setLogin($data['login']);
        $this->setSenha($data['senha']);
        $this->setDtcadastro(new DateTime($data['dtcadastro']));
    }

    public function insert()
    {
        $sql = new Sql();
        //sql server EXECUTE em vez de CALL
        $result = $sql->select("CALL sp_usuarios_insert(:LOGIN, :SENHA)", array(
            ":LOGIN" => $this->getLogin(),
            ":SENHA" => $this->getSenha()
        ));

        if (count($result) > 0) {
            $this->setData($result[0]);
        }
    }

    public function update($login, $senha)
    {
        $this->setLogin($login);
        $this->setSenha($senha);

        $sql = new Sql();
        $sql->query("UPDATE tb_usuario SET login = :LOGIN, senha = :SENHA WHERE idusuario = :ID", array(
            ":LOGIN"=>$this->getLogin(),
            ":SENHA"=>$this->getSenha(),
            ":ID"=>$this->getIdusuario()
        ));
    }

    public function delete()
    {
        $sql = new Sql();
        $sql->query("DELETE FROM tb_usuario WHERE idusuario = :ID", array(
            ":ID"=>$this->getIdusuario()
        ));

        $this->setIdusuario(0);
        $this->setLogin(NULL);
        $this->setSenha(NULL);
        $this->setDtcadastro(new DateTime());

    }

    public function __construct($login = "", $senha = ""){
        $this->setLogin($login);
        $this->setSenha($senha);
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
