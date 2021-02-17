<?php
require("repository/BusinessRepository.php");

class BusinessController
{
	var $documento;
	var $localizacion;
	var $organizacion;
	
    function __construct()
    {

    }

    public function indexDocumento(){
        //Asigno los apps a una variable que estará esperando la vista
		$repository = new BusinessRepository;

        $this->documento = $repository->getDocumento();

        $rowset = $this->documento;

        //Le paso los datos a la vista
        require("view/indexBusiness.php");
    }
	
    public function indexLocalizacion(){

        //Asigno los apps a una variable que estará esperando la vista
		$repository = new BusinessRepository;
        $this->localizacion = $repository->getLocalizacion();

        $rowset = $this->localizacion;

        //Le paso los datos a la vista
        require("view/indexBusiness.php");

    }

    public function indexOrganizacion(){

        //Asigno los apps a una variable que estará esperando la vista
		$repository = new BusinessRepository;
        $this->organizacion = $repository->getOrganizacion();

        $rowset = $this->organizacion;

        //Le paso los datos a la vista
        require("view/indexBusiness.php");

    }

}

?>