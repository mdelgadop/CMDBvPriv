

	<div class="modal fade" id="addFamiliaSOModalView" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="staticBackdropLabel">Familia SO</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			<form>
			  <div class="mb-3">
				<label for="nnFamiliaSO" class="form-label">Nombre</label>
				<input type="text" class="form-control" id="nnFamiliaSO">
			  </div>
			</form>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
			<button type="button" class="btn btn-primary" onclick="GuardarFamiliaSO()">Guardar</button>
		  </div>
		</div>
	  </div>
	</div>

<script>
function GuardarFamiliaSO()
{
	var parametros = {
		"op" : "nn",
		"token" : "<?= $encriptacion->getToken() ?>",
		"nn" : $('#nnFamiliaSO').val()
	};
	$.ajax({
		data:  parametros,
		url:   './api/other/fso/',
		type:  'post',
		success:  function (response) {
			if(response==='OK')
				location.reload();
			else
				alert(response);
		},
		error:  function (xhr, ajaxOptions, thrownError) {
			alert('Error');
			loadingUnblock();
		}
	});
}

</script>
