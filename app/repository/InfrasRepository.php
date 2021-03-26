<?php

class InfrasRepository
{
    function __construct()
    {

    }

	public function getStats(){
        $retArray = [
            1 => new Stats("Monitor",2),
            2 => new Stats("Routers",1),
            3 => new Stats("Servers",1),
			4 => new Stats("PC",1)
        ];

		return $retArray;
	}
	
	public function getStatsPorMarca(){
        $retArray = [
			1 => new Stats("BenQ", 2),
			2 => new Stats("Cisco", 1),
			3 => new Stats("Perle", 1),
			3 => new Stats("HP", 1)
        ];

		return $retArray;
	}
	
	public function getInfras(){
        $retArray = [
            1 => new Infras("BenQ","Gw2280","21.5\'\'","Puesto 1.2.21", "Mon"),
            2 => new Infras("BenQ","Gw2480","23.5\'\'","Puesto 1.3.25", "Mon"),
            3 => new Infras("Cisco","UCS-SPR-C220M4-BS1","1x16GB, MRAID, 1x770W, 32G SD", "Planta baja", "Serv"),
            4 => new Infras("Perle","LTE IRG5000","4 puertos","Planta baja", "Rout"),
			5 => new Infras("HP","HP655","","Puesto 1.2.21", "Rout"),
        ];

		return $retArray;
	}
	

}

?>