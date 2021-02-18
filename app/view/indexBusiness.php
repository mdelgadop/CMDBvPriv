    <div class="row">
        <div class="col-md-3">

			<ul class="nav flex-column">
			  <li><hr class="dropdown-divider"></li>
			  <li class="nav-item">
				  <li class="nav-item row align-items-center">
					<div class="col">
						<a class="nav-link" href="./?id=<?=$_GET["id"]?>&q1=do">Documento</a>
					</div>
					<div class="col text-end">
					  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addDocumentoModalView">+</a>
					</div>
				  </li>
			  </li>
			  <li class="nav-item">
				  <li class="nav-item row align-items-center">
					<div class="col">
						<a class="nav-link" href="./?id=<?=$_GET["id"]?>&q1=lo">Localización</a>
					</div>
					<div class="col text-end">
					  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addLocalizacionModalView">+</a>
					</div>
				  </li>
			  </li>
			  <li class="nav-item">
				  <li class="nav-item row align-items-center">
					<div class="col">
						<a class="nav-link" href="./?id=<?=$_GET["id"]?>&q1=or">Organización</a>
					</div>
					<div class="col text-end">
					  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addOrganizacionModalView">+</a>
					</div>
				  </li>
			  </li>
			</ul>
        </div>
        <div class="col-md-9">

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
	
<?php
	require("./view/indexBusiness/modal/addDocumentoModalView.php");
	
	require("./view/indexBusiness/modal/addLocalizacionModalView.php");
	
	require("./view/indexBusiness/modal/addOrganizacionModalView.php");
?>





