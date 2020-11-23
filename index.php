<?php
//!empty() Si existe el valor de la variable url entonces se usara el controlador y metodo home por defecto.
//Es como una especie de condicional, sino se manda ningun dato en la url usara home/home por defecto.
//Explode() Captura toda la cadena y el "/" actua como Delimitador para Separar.

require_once ("Config/Config.php");

$url = !empty($_GET['url']) ? $_GET['url'] : 'home/home'; 
$arrUrl = explode("/", $url);
$controller = $arrUrl[0];
$method = $arrUrl[0];
$params = "";

if (!empty($arrUrl[1])) 
{    
    if ($arrUrl[1] != "") 
    {
        $method = $arrUrl[1];
    }
}

if (!empty($arrUrl[2])) {
    
    if ($arrUrl[2] != "") 
    {
        for ($i=2; $i < count($arrUrl) ; $i++) { 
            $params .= $arrUrl[$i].',';
        }    
        $params = trim($params,',');
    }
}

require_once("Libraries/Core/Autoload.php");
require_once("Libraries/Core/Load.php");

/*echo "<br>";
echo "Controlador: ". $controller;
echo "<br>";
echo "Metodo: ". $method;
echo "<br>";
echo "Parametros: ".$params;
*/