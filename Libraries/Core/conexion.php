<?php

class conexion
{
    private $connect;

    public function __construct()
    {
        $conectionstring = "mysql:hos=".DB_HOST.";dbname=".DB_NAME.";.DB_CHARSET.";

        try {
        
        $this->connect = new PDO($conectionstring, DB_USER, DB_PASSWORD);
        $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            $this->connect = "ERROR DE CONEXION";
            echo "Error = ".$e->getMessage();
        }
    }
    
    public function connect()
    {
        return $this->connect;
    }
}
