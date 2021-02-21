<?php 
	require("../../../model/Other/Familia_SO.php");
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
			echo NuevoNombre();
		}
		else
		{
			echo $op." aun no implementado";
		}		
	}		
	
	function NuevoNombre()
	{
		$repository = new OtherRepository;
		
		$nn = $_POST['nn'];
		
		$response = $repository->newFamiliaSO($nn);
		
		return $response;
	}

?>
