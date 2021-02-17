<?php

class Localizacion
{
    //Variables o atributos
    var $nombre;
	var $activo;
	var $organizacion;
	var $ciudad;
	var $pais;
	var $direccion;

    function __construct($miNombre, $isActivo, $miOrganizacion, $miCiudad, $miPais, $miDireccion){

        $this->nombre = $miNombre;
		$this->activo = $isActivo;
		$this->organizacion = $miOrganizacion;
		$this->ciudad = $miCiudad;
		$this->pais = $miPais;
		$this->direccion = $miDireccion;
    }

    //Funciones o métodos

    function IsActivo(){

        return ($this->activo == 'T');

    }

}
?>