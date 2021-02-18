    <div class="row">
        <div class="col-md-2">
			<ul class="nav flex-column">
			  <li class="nav-item">

				  <li class="nav-item row align-items-center">
					<div class="col">
						<a class="nav-link active" aria-current="page" href="./?id=<?=$_GET["id"]?>">Todo</a>
					</div>
					<div class="col text-end">
					  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addInfrasModalView">+</a>
					</div>
				  </li>

			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="./?id=<?=$_GET["id"]?>&q1=Mon">Monitores</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="./?id=<?=$_GET["id"]?>&q1=Serv">Servidores</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="./?id=<?=$_GET["id"]?>&q1=Rout">Routers</a>
			  </li>
			</ul>
        </div>
        <div class="col-md-10">
			<table class="table table-condensed table-hover" id="myTable">
				<thead>
					<tr>
						<th>Marca</th>
						<th>Modelo</th>
						<th>Version</th>
						<th>Localizacion</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($rowset as $row): ?>
					<?php
					if(!isset($_GET["q1"]) or $_GET["q1"]==$row->tipo)
					{
					?>
					<tr>
						<td><?php echo $row->marca ?></td>
						<td><?php echo $row->modelo ?></td>
						<td><?php echo $row->version ?></td>
						<td><?php echo $row->sitio ?></td>
					</tr>
					<?php
					}
					?>
				 <?php endforeach; ?>
				 </tbody>
			</table>
        </div>
    </div>

<?php
require("./view/indexInfras/modal/addInfrasModalView.php");
?>
