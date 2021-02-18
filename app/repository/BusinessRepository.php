<?php
require("./repository/OtherRepository.php");

class BusinessRepository
{
    function __construct()
    {

    }

	public function getStats(){
        $retArray = [
            1 => new Stats("Documento",1),
            2 => new Stats("Localizacion",2),
            3 => new Stats("Organizacion",2)
        ];

		return $retArray;
	}
	
    public function getDocumento(){

		$rep = new OtherRepository;
        //Asigno los apps a una variable que estará esperando la vista

        $retArray = [
            1 => new Documento("ISO20000 Documento para el personal", 'T', null, 'Documento de ISO20000 para todo el personal de la empresa', null, null)
        ];

        return $retArray;
    }
	
	public function getLocalizacion(){

        //Asigno los apps a una variable que estará esperando la vista
		//$organizaciones = $this->getOrganizacion();
		
        $retArray = [
            1 => new Localizacion("Madrid", 'T', null, 'Madrid', 'España', 'Chaparra 15'),
            2 => new Localizacion("Valencia", 'T', null, 'Valencia', 'España', 'Estrella 16'),
        ];

        return $retArray;
    }

	public function getOrganizacion(){
        $retArray = [
            1 => new Organizacion("Madrid", 'MAD', 'T', null),
            2 => new Organizacion("Valencia", 'VAL', 'T', null)
        ];

		return $retArray;
	}


}

?>