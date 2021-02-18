<?php
require("repository/InfrasRepository.php");

class InfrasController
{
    var $apps;

    function __construct()
    {

    }

    public function index(){

        //Asigno los apps a una variable que estará esperando la vista
		$repository = new InfrasRepository;
        //Asigno los apps a una variable que estará esperando la vista
        $rowset = $repository->getInfras();


        //Le paso los datos a la vista
        require("view/indexInfras.php");

    }

}

?>