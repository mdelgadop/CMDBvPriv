<?php

class InfrasController
{
    var $apps;

    function __construct()
    {
        $this->apps = [
            1 => new Infras("BenQ","Gw2280","21.5\'\'","Puesto 1.2.21", "Mon"),
            2 => new Infras("BenQ","Gw2480","23.5\'\'","Puesto 1.3.25", "Mon"),
            3 => new Infras("Cisco","UCS-SPR-C220M4-BS1","1x16GB, MRAID, 1x770W, 32G SD", "Planta baja", "Serv"),
            4 => new Infras("Perle","LTE IRG5000","4 puertos","Planta baja", "Rout"),
        ];
    }

    public function index(){

        //Asigno los apps a una variable que estará esperando la vista
        $rowset = $this->apps;


        //Le paso los datos a la vista
        require("view/indexInfras.php");

    }

}

?>