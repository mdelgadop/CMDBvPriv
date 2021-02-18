<?php

	//Incluyo los archivos necesarios
	require("./model/ValueObjects/Stats.php");
	require("./controller/PanelStatsController.php");

	//Instancio el controlador
	$controller = new PanelStatsController;
?>

  <div class="row">
    <div class="col-sm-6">
		<div class="card">
		  <div class="card-body">
		<?php
			$controller->indexSoftware();
		?>
		  </div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="card">
		  <div class="card-body">
		<?php
			$controller->indexSoftwarePorMarca();
		?>
		  </div>
		</div>
	</div>
  </div>

<br />

  <div class="row">
    <div class="col-sm-6">
		<div class="card">
		  <div class="card-body">
		<?php
			$controller->indexInfras();
		?>
		  </div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="card">
		  <div class="card-body">
		<?php
			$controller->indexInfrasPorMarca();
		?>
		  </div>
		</div>
	</div>
  </div>





