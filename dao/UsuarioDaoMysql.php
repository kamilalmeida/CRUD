<?php

require "./models/Usuario.php";

class UsuarioDaoMysql implements UsuarioDao
{
    private $pdo;

    public function __construct(PDO $engine)
    {
        $this->pdo = $engine;
    }

    public function add(Usuario $u)
    {
    }
    public function findAll()
    {

        $array = [];
        $sql = $this->pdo->prepare("SELETC * FROM pessoas");
        if ($sql->rowCount() > 0) {
            $data = $sql->fetchAll();

            foreach($data as $item){
                
            }
        }

        return $array;
    }
    public function findById($id)
    {
    }
    public function update(Usuario $u)
    {
    }
    public function delete($id)
    {
    }
}
