<?php

class Documento
{
    //Variables o atributos
    var $nombre;
	var $activo;
	var $organizacion;
	var $descripcion;
	var $archivo;
	var $tipoDocumento;
	
    function __construct($miNombre, $isActivo, $miOrganizacion, $miDescripcion, $miArchivo, $miTipoDocumento){

        $this->nombre = $miNombre;
		$this->activo = $isActivo;
        $this->organizacion = $miOrganizacion;
		$this->descripcion = $miDescripcion;
        $this->archivo = $miArchivo;
		$this->tipoDocumento = $miTipoDocumento;
    }

    //Funciones o métodos

    function IsActivo(){

        return ($this->activo == 'T');

    }

}
?>