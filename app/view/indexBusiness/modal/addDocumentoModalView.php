
	<div class="modal fade" id="addDocumentoModalView" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="staticBackdropLabel">Documento</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			<form>
			  <div class="mb-3">
				<label for="nnDocumento" class="form-label">Nombre</label>
				<input type="text" class="form-control" id="nnDocumento">
			  </div>
			  <div class="mb-3">
				<input type="checkbox" class="form-check-input" id="cbActivoDocumento">
				<label class="form-check-label" for="cbActivoDocumento">Activo</label>
			  </div>
			  <div class="mb-3">
				<select class="form-select" aria-label="Tipo">
				  <option selected>Tipo</option>
				  <option value="1">One</option>
				  <option value="2">Two</option>
				  <option value="3">Three</option>
				</select>
			  </div>
			  <div class="mb-3">
				<select class="form-select" aria-label="Organización">
				  <option selected>Organización</option>
				  <option value="1">One</option>
				  <option value="2">Two</option>
				  <option value="3">Three</option>
				</select>
			  </div>
			</form>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
			<button type="button" class="btn btn-primary" onclick="GuardarDocumento()">Guardar</button>
		  </div>
		</div>
	  </div>
	</div>

<script>

function GuardarDocumento()
{
	alert('GuardarDocumento aún no implementado')
}

</script>
