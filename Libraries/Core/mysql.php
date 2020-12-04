<?php

class mysql extends conexion
{
    private $conection;
    private $strquery;
    private $arrvalue;

    public function __construct()
    {
        $this->conection = new conexion();
        $this->conection = $this->conection->connect();
    }

    //Inserta un Registro 
    public function insert(string $query, array $arrvalue)
    {
        $this->strquery = $query;
        $this->arrvalue = $arrvalue;

        $insert = $this->conection->prepare($this->strquery);
        $resinsert = $insert->execute($this->arrvalue);

        if ($resinsert) {
            $resinsert = $this->conection->lastInsertId();
        }else{
            $resinsert = 0;
        }
        return $resinsert;
    }

    //Obtiene un Solo Registro
    public function select(string $query)
    {
        $this->strquery = $query;
        $result = $this->conection->prepare($this->strquery);
        $result->execute();
        $data = $result->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    //Obtiene todos los registros
    public function select_all(string $query)
    {
        $this->strquery = $query;
        $result = $this->conection->prepare($this->strquery);
        $result->execute();
        $data = $result->fetchall(PDO::FETCH_ASSOC);
        return $data;
    }

    public function update(string $query, array $arrvalue)
    {
        $this->strquery = $query;
        $this->arrvalue = $arrvalue;
        $update = $this->conection->prepare($this->strquery);
        $resExecute = $update->execute($this->arrvalue);
        return $resExecute;
    }

    public function delete(string $query)
    {
        $this->strquery = $query;
        $result = $this->conection->prepare($this->strquery);
        $result->execute();
        return $result;
    }


}
