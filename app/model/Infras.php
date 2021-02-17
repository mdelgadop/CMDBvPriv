<?php

class Infras
{
    //Variables o atributos
    var $marca;
    var $modelo;
    var $version;
    var $sitio;
	var $tipo;

    function __construct($miMarca,$miModelo,$miVersion,$miSitio,$miTipo){

        $this->marca = $miMarca;
        $this->modelo = $miModelo;
        $this->version = $miVersion;
        $this->sitio = $miSitio;
		$this->tipo = $miTipo;
    }

    //Funciones o métodos
    function setMarca($miMarca){

        $this->marca = $miMarca;

    }

    function getMarca(){

        return $this->marca;

    }

    function setModelo($miModelo){

        $this->modelo = $miModelo;

    }

    function getModelo(){

        return $this->modelo;

    }

    function setVersion($miVersion){

        $this->version = $miVersion;

    }

    function getVersion(){

        return $this->version;

    }

    function setSitio($miSitio){

        $this->sitio = $miSitio;

    }

    function getSitio(){

        return $this->sitio;

    }
	
    function setTipo($miTipo){

        $this->tipo = $miTipo;

    }

    function getTipo(){

        return $this->tipo;

    }
}