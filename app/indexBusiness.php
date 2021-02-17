<?php

	//Incluyo los archivos necesarios
	require("./controller/BusinessController.php");

	//Instancio el controlador
	$controller = new BusinessController;

	//Ejecuto el método

	if(!isset($_GET["q1"]) or $_GET["q1"]=="do")
	{
		require("./model/Business/Documento.php");
		$controller->indexDocumento();
	}
	else if($_GET["q1"]=="lo")
	{
		require("./model/Business/Localizacion.php");
		$controller->indexLocalizacion();
	}
	else if($_GET["q1"]=="or")
	{
		require("./model/Business/Organizacion.php");
		$controller->indexOrganizacion();
	}

?>