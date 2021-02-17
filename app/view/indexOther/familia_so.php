			<table class="table table-condensed table-hover" id="myTable">
				<thead>
					<tr>
						<th>Familia de Sistema Operativo</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($rowset as $row): ?>

					<tr>
						<td><?php echo $row->nombre ?></td>
					</tr>

				 <?php endforeach; ?>
				 </tbody>
			</table>
