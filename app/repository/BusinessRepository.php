<?php
//require("./repository/OtherRepository.php");

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

		//$rep = new OtherRepository;
        //Asigno los apps a una variable que estará esperando la vista

        $retArray = [
            1 => new Documento("ISO20000 Documento para el personal", null, 'Documento de ISO20000 para todo el personal de la empresa', null, null)
        ];

        return $retArray;
    }
	
	public function newDocumento($nn, $miOrganizacion, $miDescripcion, $miArchivo, $miTipoDocumento){

		if($nn=='')
			return "El nombre no puede estar vacío";

        //Asigno los apps a una variable que estará esperando la vista
        $nuevo = new Documento($nn, $miOrganizacion, $miDescripcion, $miArchivo, $miTipoDocumento);

        return "newDocumento:".$nn.'-'.$miOrganizacion.'-'.$miDescripcion.'-'.$miArchivo.'-'.$miTipoDocumento;
    }
	
	public function getLocalizacion(){

        //Asigno los apps a una variable que estará esperando la vista
		//$organizaciones = $this->getOrganizacion();
		
        $retArray = [
            1 => new Localizacion("Madrid", null, 'Madrid', 'España', 'Chaparra 15'),
            2 => new Localizacion("Valencia", null, 'Valencia', 'España', 'Estrella 16'),
        ];

        return $retArray;
    }

	public function newLocalizacion($nn, $miOrganizacion, $miCiudad, $miPais, $miDireccion){

		if($nn=='')
			return "El nombre no puede estar vacío";

        //Asigno los apps a una variable que estará esperando la vista
        $nuevo = new Localizacion($nn, $isActivo, $miOrganizacion, $miCiudad, $miPais, $miDireccion);

        return "newLocalizacion:".$nn.'-'.$miOrganizacion.'-'.$miCiudad.'-'.$miPais.'-'.$miDireccion;
    }
	
	public function getOrganizacion(){
        $retArray = [
            1 => new Organizacion("Madrid", 'MAD', null),
            2 => new Organizacion("Valencia", 'VAL', null)
        ];

		return $retArray;
	}

	public function newOrganizacion($nn, $codigo, $padre){

		if($nn=='')
			return "El nombre no puede estar vacío";

        //Asigno los apps a una variable que estará esperando la vista
        $nuevo = new Organizacion($nn, $codigo, $padre);

        return "newOrganizacion:".$nn.'-'.$codigo;
    }
	

}

?>