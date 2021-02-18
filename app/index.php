<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CMDB @mdelgadop</title>
        <link href="./lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="./lib/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="./lib/bootstrap/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" type="text/css" href="./lib/DataTables/datatables.min.css"/>
		<script type="text/javascript" src="./lib/DataTables/datatables.min.js"></script>
		
		<script>
			$(document).ready( function () {
				$('#myTable').DataTable();
			} );
		</script>
    </head>
    <body>


		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="container-fluid">
			<a class="navbar-brand" href="./">CMDB</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
				  <a class="nav-link active" aria-current="page" href="./?id=software">Software</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link active" aria-current="page" href="./?id=infrastructure">Infrastructure</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link active" aria-current="page" href="./?id=bu">Business</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link active" aria-current="page" href="./?id=ot">Other</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link active" aria-current="page" href="./?id=conf">Configuration</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link active" aria-current="page" href="./?id=contacts">Contacts</a>
				</li>
			  </ul>
			  </ul>
			  <form class="d-flex">
				<div class="btn-group">
				  <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
					Personal menu
				  </button>
				  <ul class="dropdown-menu dropdown-menu-end">
					<li><button class="dropdown-item" type="button">Personal data</button></li>
					<li><button class="dropdown-item" type="button">Configuration</button></li>
					<li><hr class="dropdown-divider"></li>
					<li><button class="dropdown-item" type="button">Logout</button></li>
				  </ul>
				</div>
			  </form>
			</div>
		  </div>
		</nav>

        <div class="container">
<br/>
<?php

if(!isset($_GET["id"]))
{
	require("./indexPanelStats.php");
}
else if($_GET["id"]=="software")
{
	//Incluyo los archivos necesarios
	require("./indexSoftware.php");
}
else if($_GET["id"]=="infrastructure")
{
	require("./indexInfras.php");
}
else if($_GET["id"]=="bu")
{
	require("./indexBusiness.php");
}
else if($_GET["id"]=="ot")
{
	require("./indexOther.php");
}
else if($_GET["id"]=="conf")
{
	require("./indexConfig.php");
}
else
{
	echo $_GET["id"]." aún no implementado";
}
?>

       </div>
    </body>
</html>