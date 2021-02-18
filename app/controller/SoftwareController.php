<?php
require("repository/SoftwareRepository.php");

class SoftwareController
{
    var $apps;

    function __construct()
    {
        
    }

    public function index(){

		$repository = new SoftwareRepository;
        //Asigno los apps a una variable que estará esperando la vista
        $rowset = $repository->getSoftware();

        //Le paso los datos a la vista
        require("view/indexSoftware.php");

    }

}

?>