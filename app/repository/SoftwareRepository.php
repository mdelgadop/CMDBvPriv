<?php

class SoftwareRepository
{
    function __construct()
    {

    }

	public function getStats(){
        $retArray = [
			1 => new Stats("Sistemas operativos",0),
            2 => new Stats("Bases de datos",1),
            3 => new Stats("Escritorio",2),
            4 => new Stats("Desarrollo",1)
        ];

		return $retArray;
	}
	
	public function getStatsPorMarca(){
        $retArray = [
			1 => new Stats("Google", 1),
			2 => new Stats("Microsoft", 2),
			3 => new Stats("Oracle", 1)
        ];

		return $retArray;
	}
	
	public function getSoftware(){
        $retArray = [
            1 => new Software("Microsoft","Visual Studio","2017","v4.6.1", "Dev"),
            2 => new Software("Microsoft","Office","365","Web", "Desk"),
            3 => new Software("Oracle","Database","12g","-", "BD"),
            4 => new Software("Google","Chrome","17","0.55.651", "Desk")
        ];

		return $retArray;
	}
	
}

?>