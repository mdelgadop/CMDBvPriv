<?php
require("repository/ConfigRepository.php");

class ConfigController
{
	var $criticidad;
	var $status;
	var $tipoDocumento;
	var $tipoSoftware;
	
    function __construct()
    {

    }

    public function indexStatus(){

        //Asigno los apps a una variable que estará esperando la vista
		$repository = new ConfigRepository;
        $this->status = $repository->getStatus();

        $rowset = $this->status;

        //Le paso los datos a la vista
        require("view/indexConfig.php");
    }
	
    public function indexCriticidad(){

        //Asigno los apps a una variable que estará esperando la vista
		$repository = new ConfigRepository;
        $this->criticidad = $repository->getCriticidad();

        $rowset = $this->criticidad;

        //Le paso los datos a la vista
        require("view/indexConfig.php");

    }

    public function indexTipoDocumento(){

        //Asigno los apps a una variable que estará esperando la vista
		$repository = new ConfigRepository;
        $this->tipoDocumento = $repository->getTipoDocumento();

        $rowset = $this->tipoDocumento;

        //Le paso los datos a la vista
        require("view/indexConfig.php");

    }

    public function indexTipoSoftware(){

        //Asigno los apps a una variable que estará esperando la vista
		$repository = new ConfigRepository;
        $this->tipoSoftware = $repository->getTipoSoftware();

        $rowset = $this->tipoSoftware;

        //Le paso los datos a la vista
        require("view/indexConfig.php");

    }

}

?>