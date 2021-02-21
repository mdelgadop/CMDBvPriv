<?php

class OtherRepository
{
    function __construct()
    {

    }

	public function getStats(){
        $retArray = [
            1 => new Stats("Tipo Red",5),
            2 => new Stats("Modelo",3),
            3 => new Stats("Familia SO",3),
			4 => new Stats("Marca SO",7)
        ];

		return $retArray;
	}
	
	public function getStatsModeloPorMarca(){
        $retArray = [
			1 => new Stats("A10", 2),
			2 => new Stats("Cisco", 1)
        ];

		return $retArray;
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

	public function newTipoRed($nn){

		if($nn=='')
			return "El nombre no puede estar vacío";

        //Asigno los apps a una variable que estará esperando la vista
        $nuevo = new TipoRed($nn);

        return "newTipoRed:".$nn;
    }
	
    public function getModelo(){

        //Asigno los apps a una variable que estará esperando la vista
        $retArray = [
            1 => new Modelo("M1", 'A10'),
            2 => new Modelo("Router Greater 4", 'Cisco'),
            3 => new Modelo("M4", 'A10')
        ];

        return $retArray;
    }
	
	public function newModelo($nn, $ma){

		if($nn=='')
			return "El nombre no puede estar vacío";

		if($ma=='')
			return "La marca no puede estar vacía";

        //Asigno los apps a una variable que estará esperando la vista
        $nuevo = new Modelo($nn, $ma);

        return "newModelo:".$nn.'-'.$ma;
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

	public function newFamiliaSO($nn){

		if($nn=='')
			return "El nombre no puede estar vacío";

        //Asigno los apps a una variable que estará esperando la vista
        $nuevo = new Familia_SO($nn);

        return "newFamiliaSO:".$nn;
    }
	
}

?>