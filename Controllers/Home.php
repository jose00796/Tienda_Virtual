<?php
//PAGINA PRINCIPAL DEL PROYECTO... 
class Home extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function home($params)
    {
        //echo "Mensaje desde el Controlador";
    }

    public function datos($params)
    {
        echo "Daro Recibido = ".$params;
    }

    public function carrito($params)
    {
        $carrito = $this->model->getCarrito($params);
        echo $carrito;
    }
}
