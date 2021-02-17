<?php

class Modelo
{
    //Variables o atributos
    var $nombre;
	var $marca;

    function __construct($miNombre, $miMarca){

        $this->nombre = $miNombre;
		$this->marca = $miMarca;
    }

    //Funciones o métodos

    function setNombre($miNombre){

        $this->nombre = $miNombre;

    }

    function getNombre(){

        return $this->nombre;

    }

    //Funciones o métodos

    function setMarca($miMarca){

        $this->marca = $miMarca;

    }

    function getMarca(){

        return $this->marca;

    }

}
?>