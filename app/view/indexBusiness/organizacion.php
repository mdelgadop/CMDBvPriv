			<table class="table table-condensed table-hover" id="myTable">
				<thead>
					<tr>
						<th>Organización</th>
						<th>Codigo</th>
						<th>Activo</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($rowset as $row): ?>

					<tr>
						<td><?php echo $row->nombre ?></td>
						<td><?php echo $row->codigo ?></td>
						<td><?php echo ($row->activo === 'T' ? 'Activo' : 'No activo') ?></td>
					</tr>

				 <?php endforeach; ?>
				 </tbody>
			</table>
