<?php

	//Incluyo los archivos necesarios
	require("./model/Infras.php");
	require("./controller/InfrasController.php");

	//Instancio el controlador
	$controller = new InfrasController;

	//Ejecuto el método
	$controller->index();

?>
