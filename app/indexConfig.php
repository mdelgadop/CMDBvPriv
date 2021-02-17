<?php

	//Incluyo los archivos necesarios
	require("./controller/ConfigController.php");

	//Instancio el controlador
	$controller = new ConfigController;

	//Ejecuto el método
	

	if(!isset($_GET["q1"]) or $_GET["q1"]=="st")
	{
		require("./model/Config/Status.php");
		$controller->indexStatus();
	}
	else if($_GET["q1"]=="cr")
	{
		require("./model/Config/Criticidad.php");
		$controller->indexCriticidad();
	}
	else if($_GET["q1"]=="td")
	{
		require("./model/Config/Tipo_Documento.php");
		$controller->indexTipoDocumento();
	}
	else if($_GET["q1"]=="ts")
	{
		require("./model/Config/Tipo_Software.php");
		$controller->indexTipoSoftware();
	}

?>