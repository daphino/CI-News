<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12">

		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Edit Peta</h3>
			</div>

			<div class="car-body">
				<form action="<?= base_url("admin/peta/".$data['peta_item']['id']."/update") ?>" method="post" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row">
							<div class="col-md-7">
								<div class="form-group">
									<input type="text" name="title" required class="form-control" placeholder="Enter news title" value="<?= $data['peta_item']['title'] ?>">
								</div>
								<div class="form-group">
									<textarea name="description" required rows="5" placeholder="Enter description" class="form-control"><?= $data['peta_item']['description'] ?></textarea>
								</div>

							</div>
							<div class="col-md-5">
								<div class="form-group">
									<label>Upload File</label>
									<input type="file" name="file_url" multiple class="form-control" >
									<a href="<?= base_url('uploads/'.$data['peta_item']['file_url']) ?>"><?= $data['peta_item']['title'] ?></a>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
						<button type="submit" class="btn btn-primary">Update</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>

<script>
	$(document).ready(function() {

	})
</script>
