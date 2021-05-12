<?php

class Connection{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "coolders";
    private $connect;

    public function __construct(){
        $connectionString = "mysql:hos=".$this->host.";dbname=".$this->database.";charset=utf8";
        try{
            $this->connect = new PDO($connectionString,$this->user,$this->password);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e){
            $this->connect = 'Error de conexion';
            echo "ERROR:".$e->getMessage();
        }
    }

    public function connect(){
        return $this->connect;
    }
}



?>