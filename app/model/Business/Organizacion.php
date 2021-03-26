<?php

class Organizacion
{
    //Variables o atributos
    var $nombre;
	var $codigo;
	var $padre;
	
    function __construct($miNombre, $miCodigo, $miPadre){

        $this->nombre = $miNombre;
		$this->codigo = $miCodigo;
		$this->padre = $miPadre;
    }

}
?>