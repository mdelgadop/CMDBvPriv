<?php
require("repository/SoftwareRepository.php");
require("repository/InfrasRepository.php");

class PanelStatsController
{
    var $apps;

    function __construct()
    {
        
    }

    public function indexSoftware(){

		$repository = new SoftwareRepository;

        //Asigno los apps a una variable que estará esperando la vista
        $rowset = $repository->getStats();

        //Le paso los datos a la vista
        require("view/indexPanelStats/software.php");

    }

    public function indexSoftwarePorMarca(){

		$repository = new SoftwareRepository;

        //Asigno los apps a una variable que estará esperando la vista
        $rowset = $repository->getStatsPorMarca();

        //Le paso los datos a la vista
        require("view/indexPanelStats/softwarePorMarca.php");

    }

    public function indexInfras(){

		$repository = new InfrasRepository;

        //Asigno los apps a una variable que estará esperando la vista
        $rowset = $repository->getStats();

        //Le paso los datos a la vista
        require("view/indexPanelStats/infras.php");

    }

    public function indexInfrasPorMarca(){

		$repository = new InfrasRepository;

        //Asigno los apps a una variable que estará esperando la vista
        $rowset = $repository->getStatsPorMarca();

        //Le paso los datos a la vista
        require("view/indexPanelStats/infrasPorMarca.php");

    }

}

?>