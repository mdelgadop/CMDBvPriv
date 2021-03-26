<?php

class Documento
{
    //Variables o atributos
    var $nombre;
	var $organizacion;
	var $descripcion;
	var $archivo;
	var $tipoDocumento;
	
    function __construct($miNombre, $miOrganizacion, $miDescripcion, $miArchivo, $miTipoDocumento){

        $this->nombre = $miNombre;
        $this->organizacion = $miOrganizacion;
		$this->descripcion = $miDescripcion;
        $this->archivo = $miArchivo;
		$this->tipoDocumento = $miTipoDocumento;
    }

}
?>