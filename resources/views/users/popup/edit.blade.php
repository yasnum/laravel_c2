	<!-- Edit Item Modal -->
		<div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		        <h4 class="modal-title" id="myModalLabel">Edit Item</h4>
		      </div>
		      <div class="modal-body">

		      		<form data-toggle="validator" action="/unore/14" method="put">
		      			<div class="form-group">
									<label class="control-label" for="Unit_Org">Unit Organisasi:</label>
									<input type="text" name="Unit_Org" class="form-control" data-error="Please enter Unit Organisasi." required />
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group">
									<label class="control-label" for="Keterangan">Keterangan :</label>
									<textarea name="Keterangan" class="form-control" data-error="Please enter Keterangan." required></textarea>
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-success crud-submit-edit" data-dismiss="modal">Submit</button>
								</div>
		      		</form>

		      </div>
		    </div>
		  </div>
		</div>
