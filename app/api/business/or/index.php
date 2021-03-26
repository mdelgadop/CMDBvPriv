<?php 
	require("../../../model/Business/Organizacion.php");
	require("../../../repository/BusinessRepository.php");
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
		$repository = new BusinessRepository;
		
		$nn = $_POST['nn'];
		$codigo = $_POST['co'];
		$isActivo = $_POST['ia'];
		$padre = null;
		
		$response = $repository->newOrganizacion($nn, $codigo, $isActivo, $padre);
		
		return $response;
	}

?>
