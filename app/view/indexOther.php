    <div class="row">
        <div class="col-md-3">

			<ul class="nav flex-column">

			  <li><hr class="dropdown-divider"></li>
			  <li class="nav-item">
				  <li class="nav-item row align-items-center">
					<div class="col">
						<a class="nav-link" href="./?id=<?=$_GET["id"]?>&q1=tr">Tipo&nbsp;de&nbsp;red</a>
					</div>
					<div class="col text-end">
					  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addTipoDeRedModalView">+</a>
					</div>
				  </li>
			  </li>
			  <li class="nav-item">
				  <li class="nav-item row align-items-center">
					<div class="col">
						<a class="nav-link" href="./?id=<?=$_GET["id"]?>&q1=so">Familia&nbsp;SO</a>
					</div>
					<div class="col text-end">
					  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addFamiliaSOModalView">+</a>
					</div>
				  </li>
			  </li>
			  <li class="nav-item">
				  <li class="nav-item row align-items-center">
					<div class="col">
						<a class="nav-link" href="./?id=<?=$_GET["id"]?>&q1=mo">Modelo</a>
					</div>
					<div class="col text-end">
					  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addModeloModalView">+</a>
					</div>
				  </li>
			  </li>
			</ul>
        </div>
        <div class="col-md-9">

<?php

if(!isset($_GET["q1"]) or $_GET["q1"]=="tr")
{
	require("./view/indexOther/tipoRed.php");
}
else if($_GET["q1"]=="so")
{
	require("./view/indexOther/familia_so.php");
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
	



<?php
	require("./view/indexOther/modal/addTipoDeRedModalView.php");
	
	require("./view/indexOther/modal/addFamiliaSOModalView.php");
	
	require("./view/indexOther/modal/addModeloModalView.php");
?>




