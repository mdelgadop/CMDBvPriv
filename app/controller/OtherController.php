<?php
require("repository/OtherRepository.php");

class OtherController
{
	var $tipoRed;
	var $criticidad;
	var $familiaSO;
	var $marca;
	
    function __construct()
    {

    }

    public function indexTipoRed(){

        //Asigno los apps a una variable que estará esperando la vista
		$repository = new OtherRepository;
        $this->tipoRed = $repository->getTipoRed();

        $rowset = $this->tipoRed;

        //Le paso los datos a la vista
        require("view/indexOther.php");
    }
	

    public function indexModelo(){

        //Asigno los apps a una variable que estará esperando la vista
		$repository = new OtherRepository;
        $this->modelo = $repository->getModelo();

        $rowset = $this->modelo;

        //Le paso los datos a la vista
        require("view/indexOther.php");

    }

    public function indexFamiliaSO(){

        //Asigno los apps a una variable que estará esperando la vista
		$repository = new OtherRepository;
        $this->familiaSO = $repository->getFamiliaSO();

        $rowset = $this->familiaSO;

        //Le paso los datos a la vista
        require("view/indexOther.php");

    }

    public function indexMarca(){

        //Asigno los apps a una variable que estará esperando la vista
		$repository = new OtherRepository;
        $this->marca = $repository->getMarca();

        $rowset = $this->marca;

        //Le paso los datos a la vista
        require("view/indexOther.php");

    }

}

?>