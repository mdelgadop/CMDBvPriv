<?php

class Organizacion
{
    //Variables o atributos
    var $nombre;
	var $codigo;
	var $activo;
	var $padre;
	
    function __construct($miNombre, $miCodigo, $isActivo, $miPadre){

        $this->nombre = $miNombre;
		$this->codigo = $miCodigo;
		$this->activo = $isActivo;
		$this->padre = $miPadre;
    }

    //Funciones o métodos

    function IsActivo(){

        return ($this->activo == 'T');

    }

}
?>