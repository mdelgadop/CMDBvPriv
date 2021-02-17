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
				<a class="nav-link" href="./?id=<?=$_GET["id"]?>&q1=do">Documento</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="./?id=<?=$_GET["id"]?>&q1=lo">Localización</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="./?id=<?=$_GET["id"]?>&q1=or">Organización</a>
			  </li>
			</ul>
        </div>
        <div class="col-md-10">

<?php

if(!isset($_GET["q1"]) or $_GET["q1"]=="do")
{
	require("./view/indexBusiness/documento.php");
}
else if($_GET["q1"]=="lo")
{
	require("./view/indexBusiness/localizacion.php");
}
else if($_GET["q1"]=="or")
{
	require("./view/indexBusiness/organizacion.php");
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