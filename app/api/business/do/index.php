<?php 
	require("../../../model/Business/Documento.php");
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
			echo NuevoNombre();
		}
		else
		{
			echo $op." aun no implementado";
		}		
	}		
	
	function NuevoNombre()
	{
		$repository = new BusinessRepository;
		
		$nn = $_POST['nn'];
		$isActivo = $_POST['ia'];
		$miOrganizacion = $_POST['or'];
		$miDescripcion = $_POST['de'];
		$miArchivo = null;
		$miTipoDocumento = $_POST['td'];
		
		$response = $repository->newDocumento($nn, $isActivo, $miOrganizacion, $miDescripcion, $miArchivo, $miTipoDocumento);
		
		return $response;
	}

?>
