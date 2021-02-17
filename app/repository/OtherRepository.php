<?php

class OtherRepository
{
    function __construct()
    {

    }

	public function getTipoRed(){
        $retArray = [
            1 => new TipoRed("AP"),
            2 => new TipoRed("Firewall"),
            3 => new TipoRed("LoadBalancer"),
			4 => new TipoRed("Router"),
			5 => new TipoRed("Switch")
        ];

		return $retArray;
	}

    public function getModelo(){

        //Asigno los apps a una variable que estará esperando la vista
		$marcas = $this->getMarca();
		
        $retArray = [
            1 => new Modelo("M1", $marcas[1]),
            2 => new Modelo("Router Greater 4", $marcas[2]),
            3 => new Modelo("M4", $marcas[1])
        ];

        return $retArray;
    }
	
	public function getFamiliaSO(){

        //Asigno los apps a una variable que estará esperando la vista

        $retArray = [
            1 => new Familia_SO("Linux"),
            2 => new Familia_SO("Windows"),
            3 => new Familia_SO("Mac")
        ];

        return $retArray;
    }

	public function getMarca(){

        //Asigno los apps a una variable que estará esperando la vista

        $retArray = [
			1 => new Marca("A10"),
			2 => new Marca("Cisco"),
			3 => new Marca("Dell"),
			4 => new Marca("EMC"),
			5 => new Marca("Fortigate"),
			6 => new Marca("HP"),
			7 => new Marca("VMWare")
        ];

        return $retArray;
    }

}

?>