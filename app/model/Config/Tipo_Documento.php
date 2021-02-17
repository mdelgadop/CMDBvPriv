<?php

class Tipo_Documento
{
    //Variables o atributos
    var $nombre;

    function __construct($miNombre){

        $this->nombre = $miNombre;
    }

    //Funciones o métodos

    function setNombre($miNombre){

        $this->nombre = $miNombre;

    }

    function getNombre(){

        return $this->nombre;

    }

}
?>