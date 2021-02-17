<?php

	//Incluyo los archivos necesarios
	require("./controller/OtherController.php");

	//Instancio el controlador
	$controller = new OtherController;

	//Ejecuto el método
	

	if(!isset($_GET["q1"]) or $_GET["q1"]=="tr")
	{
		require("./model/Other/TipoRed.php");
		$controller->indexTipoRed();
	}
	else if($_GET["q1"]=="mo")
	{
		require("./model/Other/Marca.php");
		require("./model/Other/Modelo.php");
		$controller->indexModelo();
	}
	else if($_GET["q1"]=="so")
	{
		require("./model/Other/Familia_SO.php");
		$controller->indexFamiliaSO();
	}
	else if($_GET["q1"]=="ma")
	{
		require("./model/Other/Marca.php");
		$controller->indexMarca();
	}

?>