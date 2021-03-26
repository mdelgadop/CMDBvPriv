			<table class="table table-condensed table-hover" id="myTable">
				<thead>
					<tr>
						<th>Localización</th>
						<th>Ciudad</th>
						<th>Pais</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($rowset as $row): ?>

					<tr>
						<td><?php echo $row->nombre ?></td>
						<td><?php echo $row->ciudad ?></td>
						<td><?php echo $row->pais ?></td>
					</tr>

				 <?php endforeach; ?>
				 </tbody>
			</table>
