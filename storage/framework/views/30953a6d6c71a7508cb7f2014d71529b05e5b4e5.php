	<!-- Edit Item Modal -->
		<div class="modal fade" id="edit-iteme" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		        <h4 class="modal-title" id="myModalLabel">Edit Item</h4>
		      </div>
		      <div class="modal-body">

		      		<form data-toggle="validator" action="/usere/14" method="put">
		      			<div class="form-group">
									<label class="control-label" for="title">Name:</label>
									<input id="name" type="text" name="name" class="form-control" data-error="Please enter title." required />
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group">
									<label class="control-label" for="title">Username:</label>
									<input id="username" type="text" name="username" class="form-control" data-error="Please enter title." required />
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group">
									<label class="control-label" for="title">Email:</label>
									<input id=="email" type="text" name="email" class="form-control" data-error="Please enter Email." required />
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-success crud-submit-edit">Submit</button>
								</div>
		      		</form>

		      </div>
		    </div>
		  </div>
		</div>
