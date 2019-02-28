<?php


class Sql extends PDO
{

    private $conn;

    //construct com inicio do sql já iniciando a conexao
    public function __construct()
    {
        //conexão armazenada na varialvel conn
        $this->conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
    }

    private function setParams($statements, $parameters  = array())
    {
        foreach ($parameters as $key => $value) {
            $this->setParam($statements, $key, $value);
        }
    }

    private function setParam($statement, $key, $value)
    {
            $statement->bindParam($key, $value);
    }

    public function query($rowQuery, $params = array())
    {
        $stmt = $this->conn->prepare($rowQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt;
    }

    public function select($rowQuery, $params = array()):array
    {
        $stmt = $this->query($rowQuery,$params);
        return $stmt->fetchall(PDO::FETCH_ASSOC);
    }

}


?>
