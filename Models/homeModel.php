<?php

class homeModel
{
    public function __construct()
    {
        //echo "Mensaje desde el Modelo Home";
    }

    public function getCarrito($params)
    {
        return "Datos del Carrito Nro = ".$params;
    }
}
