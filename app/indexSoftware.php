<?php
	//Incluyo los archivos necesarios
	require("./model/Software.php");
	require("./controller/SoftwareController.php");

	//Instancio el controlador
	$controller = new SoftwareController;

	//Ejecuto el método
	$controller->index();
?>
