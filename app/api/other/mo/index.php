<?php 
	require("../../../model/Other/Modelo.php");
	require("../../../repository/OtherRepository.php");
	require("../../../core/Encriptacion.php");
	$encriptacion = new Encriptacion;
	
	if($encriptacion->testToken($_POST['token']) == 'KO')
	{
		echo "No autorizado";
	}
	else
	{
		$op=$_POST['op'];
		
		if($op == "nn")//getToken
		{
			echo Nuevo();
		}
		else
		{
			echo $op." aun no implementado";
		}		
	}		
	
	function Nuevo()
	{
		$repository = new OtherRepository;
		
		$nn = $_POST['nn'];
		$ma = $_POST['ma'];
		
		$response = $repository->newModelo($nn, $ma);
		
		return $response;
	}

?>
