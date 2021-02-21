<?php

class ConfigRepository
{
    function __construct()
    {

    }

    public function getCriticidad(){

        //Asigno los apps a una variable que estará esperando la vista

        $retArray = [
            1 => new Criticidad("Alto"),
            2 => new Criticidad("Medio"),
            3 => new Criticidad("Bajo")
        ];

        return $retArray;
    }
	
	public function newCriticidad($nn){

		if($nn=='')
			return "El nombre no puede estar vacío";

        //Asigno los apps a una variable que estará esperando la vista
        $nuevo = new Criticidad($nn);

        return "newTipoSoftware:".$nn;
    }
	
	public function getStatus(){
        $retArray = [
            1 => new Status("En producción"),
            2 => new Status("No en producción"),
            3 => new Status("Obsoleto"),
			4 => new Status("En inventario")
        ];

		return $retArray;
	}

	public function newStatus($nn){

		if($nn=='')
			return "El nombre no puede estar vacío";

        //Asigno los apps a una variable que estará esperando la vista

        $nuevo = new Status($nn);

        return "newStatus:".$nn;
    }
	
	public function getTipoDocumento(){

        //Asigno los apps a una variable que estará esperando la vista

        $retArray = [
            1 => new Tipo_Documento("Procedimiento"),
            2 => new Tipo_Documento("Contrato")
        ];

        return $retArray;
    }

	public function newTipoDocumento($nn){

		if($nn=='')
			return "El nombre no puede estar vacío";

        //Asigno los apps a una variable que estará esperando la vista

        $nuevo = new Tipo_Documento($nn);

        return "newTipoDocumento:".$nn;
    }
	
	public function getTipoSoftware(){

        //Asigno los apps a una variable que estará esperando la vista

        $retArray = [
			1 => new Tipo_Software("Servidor de BD"),
			2 => new Tipo_Software("Middleware"),
			3 => new Tipo_Software("PC"),
			4 => new Tipo_Software("Servidor Web")
        ];

        return $retArray;
    }

	public function newTipoSoftware($nn){

        //Asigno los apps a una variable que estará esperando la vista

		if($nn=='')
			return "El nombre no puede estar vacío";

        $nuevo = new Tipo_Software($nn);

        return "newTipoSoftware:".$nn;
    }
}

?>