			<table class="table table-condensed table-hover" id="myTable">
				<thead>
					<tr>
						<th>Modelo</th>
						<th>Marca</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($rowset as $row): ?>

					<tr>
						<td><?php echo $row->nombre ?></td>
						<td><?php echo $row->marca->nombre ?></td>
					</tr>

				 <?php endforeach; ?>
				 </tbody>
			</table>
