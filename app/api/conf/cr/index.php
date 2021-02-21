<?php 
	require("../../../model/Config/Criticidad.php");
	require("../../../repository/ConfigRepository.php");
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
		$repository = new ConfigRepository;
		
		$nn = $_POST['nn'];
		
		$response = $repository->newCriticidad($nn);
		
		return "OK: ".$response;
	}

?>
