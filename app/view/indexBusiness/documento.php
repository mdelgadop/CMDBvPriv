			<table class="table table-condensed table-hover" id="myTable">
				<thead>
					<tr>
						<th>Documento</th>
						<th>Tipo</th>
						<th>Organización</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($rowset as $row): ?>

					<tr>
						<td><?php echo $row->nombre ?></td>
						<td><?php echo $row->tipoDocumento->nombre ?></td>
						<td><?php echo $row->organizacion->nombre ?></td>
					</tr>

				 <?php endforeach; ?>
				 </tbody>
			</table>
