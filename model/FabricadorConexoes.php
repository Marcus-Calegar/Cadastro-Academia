<?php
define('SERVIDOR', 'mysql:host=localhost;dbname=Academia;');
define('USUARIO', 'root');
define('SENHA', '');
class Conexao
{
    private $conn;
    public function __construct()
    {
        $this->conn = new PDO(SERVIDOR, USUARIO, SENHA);
    }
    public function preparar($sql)
    {
        return $this->conn->prepare($sql);
    }
    public function comando($sql)
    {
        return $this->conn->query($sql);
    }
}
