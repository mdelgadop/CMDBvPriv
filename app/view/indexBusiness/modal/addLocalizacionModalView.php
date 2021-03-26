
	<div class="modal fade" id="addLocalizacionModalView" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="staticBackdropLabel">Localización</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			<form>
			  <div class="mb-3">
				<label for="nnLoc" class="form-label">Nombre</label>
				<input type="text" class="form-control" id="nnLoc">
			  </div>
			  <div class="mb-3">
				<select class="form-select" aria-label="Organización" id="selOrgLoc">
				  <option selected>Organización</option>
				  <option value="1">One</option>
				  <option value="2">Two</option>
				  <option value="3">Three</option>
				</select>
			  </div>
			  <div class="mb-3">
				<label for="ciudadLoc" class="form-label">Ciudad</label>
				<input type="text" class="form-control" id="ciudadLoc">
			  </div>
			  <div class="mb-3">
				<label for="paisLoc" class="form-label">Pais</label>
				<input type="text" class="form-control" id="paisLoc">
			  </div>
			  <div class="mb-3">
				<label for="direccionLoc" class="form-label">Dirección</label>
				<input type="text" class="form-control" id="direccionLoc">
			  </div>
			</form>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
			<button type="button" class="btn btn-primary" onclick="GuardarLocalizacion()">Guardar</button>
		  </div>
		</div>
	  </div>
	</div>

<script>

function GuardarLocalizacion()
{
	var parametros = {
		"op" : "nn",
		"token" : "<?= $encriptacion->getToken() ?>",
		"nn" : $('#nnLoc').val(),
		"or" : $('#selOrgLoc').val(),
		"ci" : $('#ciudadLoc').val(),
		"pa" : $('#paisLoc').val(),
		"di" : $('#direccionLoc').val()
	};
	alert(JSON.stringify(parametros));
	$.ajax({
		data:  parametros,
		url:   './api/business/lo/',
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
