<?php 
	require("../../../model/Business/Localizacion.php");
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
		$isActivo = $_POST['ia'];
		$miOrganizacion = null;
		$miCiudad = $_POST['ci'];
		$miPais = $_POST['pa'];
		$miDireccion = $_POST['di'];
		
		$response = $repository->newLocalizacion($nn, $isActivo, $miOrganizacion, $miCiudad, $miPais, $miDireccion);
		
		return $response;
	}

?>
