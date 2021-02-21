    <div class="row">
        <div class="col-md-3">

			<ul class="nav flex-column">
			  <li><hr class="dropdown-divider"></li>
			  <li class="nav-item">
				  <li class="nav-item row align-items-center">
					<div class="col">
						<a class="nav-link" href="./?id=<?=$_GET["id"]?>&q1=st">Estado</a>
					</div>
					<div class="col text-end">
					  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addEstadoModalView">+</a>
					</div>
				  </li>
			  </li>
			  <li class="nav-item">
				  <li class="nav-item row align-items-center">
					<div class="col">
						<a class="nav-link" href="./?id=<?=$_GET["id"]?>&q1=cr">Criticidad</a>
					</div>
					<div class="col text-end">
					  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addCriticidadModalView">+</a>
					</div>
				  </li>
			  </li>
			  <li class="nav-item">
				  <li class="nav-item row align-items-center">
					<div class="col">
						<a class="nav-link" href="./?id=<?=$_GET["id"]?>&q1=td">Tipo&nbsp;de&nbsp;documento</a>
					</div>
					<div class="col text-end">
					  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addTipoDeDocumentoModalView">+</a>
					</div>
				  </li>
			  </li>
			  <li class="nav-item">
				  <li class="nav-item row align-items-center">
					<div class="col">
						<a class="nav-link" href="./?id=<?=$_GET["id"]?>&q1=ts">Tipo&nbsp;de&nbsp;software</a>
					</div>
					<div class="col text-end">
					  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addTipoDeSoftwareModalView">+</a>
					</div>
				  </li>
			  </li>
			</ul>
        </div>
        <div class="col-md-9">

<?php

require("./core/Encriptacion.php");
$encriptacion = new Encriptacion;

if(!isset($_GET["q1"]) or $_GET["q1"]=="st")
{
	require("./view/indexConfig/status.php");
}
else if($_GET["q1"]=="cr")
{
	require("./view/indexConfig/criticidad.php");
}
else if($_GET["q1"]=="td")
{
	require("./view/indexConfig/tipodocumento.php");
}
else if($_GET["q1"]=="ts")
{
	require("./view/indexConfig/tiposoftware.php");
}
else
{
	echo $_GET["id"]." aún no implementado";
}
?>

        </div>
    </div>
	
	<?php
	require("./view/indexConfig/modal/addEstadoModalView.php");
	
	require("./view/indexConfig/modal/addCriticidadModalView.php");
	
	require("./view/indexConfig/modal/addTipoDeDocumentoModalView.php");
	
	require("./view/indexConfig/modal/addTipoDeSoftwareModalView.php");
?>





