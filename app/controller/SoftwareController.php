<?php

class SoftwareController
{
    var $apps;

    function __construct()
    {
        $this->apps = [
            1 => new Software("Microsoft","Visual Studio","2017","v4.6.1", "Dev"),
            2 => new Software("Microsoft","Office","365","Web", "Desk"),
            3 => new Software("Oracle","Database","12g","-", "BD"),
            4 => new Software("Google","Chrome","17","0.55.651", "Desk")
        ];
    }

    public function index(){

        //Asigno los apps a una variable que estará esperando la vista
        $rowset = $this->apps;


        //Le paso los datos a la vista
        require("view/indexSoftware.php");

    }

}

?>