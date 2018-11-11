<div id="edit-item" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<div class="modal-body">

				<form class="form-horizontal" method="post">
					<div class="row">
						<div class="col-md-4">
							<img class="img-responsive item-view" id="img-item-edit">
							<input type="file" name="img" class="form-control">
						</div>
						<div class="col-md-8">
							<div class="form-group">
								<label class="col-lg-3">Item Code</label>
								<div class="col-lg-9">
									<input type="text" class="form-control"  id="code-item-edit">
								</div>
							</div>

							<div class="form-group">
							  <label class="col-lg-3">Item Name</label>
								<div class="col-lg-9">
									<input type="text" class="form-control"  id="name-item-edit">
								</div>
							</div>

							<div class="form-group">
					      <label class="control-label col-lg-3">Item Type</label>
					      <div class="col-lg-6">
					        <select class="form-control category-type" required id="category-type" name="category-type">

					        </select>
					      </div>

					      <div class="col-lg-1">
					        <button type="button" class="btn btn-primary btn-icon"  data-toggle="modal" data-target="#modal_create_ctg_type">
					          <i class="icon-add"></i>
					        </button>
					      </div>

					      <div class="col-lg-6 col-lg-offset-3">
					        <select class="form-control sub-category" required name="sub-category">

					        </select>
					      </div>
					    </div>

					    <div class="form-group">
					      <label class="control-label col-lg-3">Item Color</label>
					      <div class="col-lg-6">
					        <select class="form-control category-color" required name="category-color">

					        </select>
					      </div>
					      <div class="col-lg-1">
					        <button type="button" class="btn btn-primary btn-icon" data-toggle="modal" data-target="#modal_create_ctg_color">
					          <i class="icon-add"></i>
					        </button>
					      </div>
					    </div>

							<div class="form-group">
								<label class="col-lg-3">Item Status</label>
								<div class="col-lg-9">
									<input type="text" class="form-control"  id="status-item-edit">
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-3">Item Price</label>
								<div class="col-lg-9">
									<input type="text" class="form-control"  id="price-item-edit">
								</div>
							</div>
						</div>
					</div>
				</form>

      </div>

			<div class="modal-footer">
				<button type="button" class="btn btn-success btn-block" data-dismiss="modal">Save</button>
			</div>
		</div>
	</div>
</div>
