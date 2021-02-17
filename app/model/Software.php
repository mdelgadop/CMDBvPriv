<?php

class Software
{
    //Variables o atributos
    var $marca;
    var $nombre;
    var $version;
    var $info;
	var $tipo;

    function __construct($miMarca,$miNombre,$miVersion,$miInfo,$miTipo){

        $this->marca = $miMarca;
        $this->nombre = $miNombre;
        $this->version = $miVersion;
        $this->info = $miInfo;
		$this->tipo = $miTipo;
    }

    //Funciones o métodos
    function setMarca($miMarca){

        $this->marca = $miMarca;

    }

    function getMarca(){

        return $this->marca;

    }

    function setNombre($miNombre){

        $this->nombre = $miNombre;

    }

    function getNombre(){

        return $this->nombre;

    }

    function setVersion($miVersion){

        $this->version = $miVersion;

    }

    function getVersion(){

        return $this->version;

    }

    function setInfo($miInfo){

        $this->info = $miInfo;

    }

    function getInfo(){

        return $this->info;

    }
	
    function setTipo($miTipo){

        $this->tipo = $miTipo;

    }

    function getTipo(){

        return $this->tipo;

    }
}