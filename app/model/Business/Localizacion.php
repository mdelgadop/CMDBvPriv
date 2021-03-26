<?php

class Localizacion
{
    //Variables o atributos
    var $nombre;
	var $organizacion;
	var $ciudad;
	var $pais;
	var $direccion;

    function __construct($miNombre, $miOrganizacion, $miCiudad, $miPais, $miDireccion){

        $this->nombre = $miNombre;
		$this->organizacion = $miOrganizacion;
		$this->ciudad = $miCiudad;
		$this->pais = $miPais;
		$this->direccion = $miDireccion;
    }

}
?>