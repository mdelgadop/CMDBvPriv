    <div class="row">
        <div class="col-md-2">

			<ul class="nav flex-column">
			  <li class="nav-item">
				<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSoftwareModalView">
					  +
					</button>
				</div>
			  </li>
			  <li><hr class="dropdown-divider"></li>
			  <li class="nav-item">
				<a class="nav-link" href="./?id=<?=$_GET["id"]?>&q1=tr">Tipos de red</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="./?id=<?=$_GET["id"]?>&q1=so">Familia SO</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="./?id=<?=$_GET["id"]?>&q1=ma">Marca</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="./?id=<?=$_GET["id"]?>&q1=mo">Modelo</a>
			  </li>
			</ul>
        </div>
        <div class="col-md-10">

<?php

if(!isset($_GET["q1"]) or $_GET["q1"]=="tr")
{
	require("./view/indexOther/tipoRed.php");
}
else if($_GET["q1"]=="so")
{
	require("./view/indexOther/familia_so.php");
}
else if($_GET["q1"]=="ma")
{
	require("./view/indexOther/marca.php");
}
else if($_GET["q1"]=="mo")
{
	require("./view/indexOther/modelo.php");
}
else
{
	echo $_GET["id"]." aún no implementado";
}
?>

        </div>
    </div>
	

	<div class="modal fade" id="addSoftwareModalView" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="staticBackdropLabel">Nuevo</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			...
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
			<button type="button" class="btn btn-primary" onclick="javascript:alert('Aún no implementado')">Guardar</button>
		  </div>
		</div>
	  </div>
	</div>
