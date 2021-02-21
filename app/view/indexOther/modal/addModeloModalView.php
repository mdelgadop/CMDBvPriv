
	<div class="modal fade" id="addModeloModalView" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="staticBackdropLabel">Modelo</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			<form>
			  <div class="mb-3">
				<label for="nnModelo" class="form-label">Nombre</label>
				<input type="text" class="form-control" id="nnModelo">
			  </div>
			  <div class="mb-3">
				<label for="maModelo" class="form-label">Marca</label>
				<input type="text" class="form-control" id="maModelo">
			  </div>
			</form>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
			<button type="button" class="btn btn-primary" onclick="GuardarModelo()">Guardar</button>
		  </div>
		</div>
	  </div>
	</div>

<script>
function GuardarModelo()
{
	var parametros = {
		"op" : "nn",
		"token" : "<?= $encriptacion->getToken() ?>",
		"nn" : $('#nnModelo').val(),
		"ma" : $('#maModelo').val()
	};

	$.ajax({
		data:  parametros,
		url:   './api/other/mo/',
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
