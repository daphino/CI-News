<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12">

		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Edit Flyer</h3>
			</div>

			<div class="car-body">
				<form action="<?= base_url("admin/flyer/".$data['flyer_item']['id']."/update") ?>" method="post" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row">
							<div class="col-md-7">
								<div class="form-group">
									<input type="text" name="title" required class="form-control" placeholder="Enter news title" value="<?= $data['flyer_item']['title'] ?>">
								</div>
								<div class="form-group">
									<textarea name="description" required rows="5" placeholder="Enter description" class="form-control"><?= $data['flyer_item']['description'] ?></textarea>
								</div>

							</div>
							<div class="col-md-5">
								<div class="form-group">
									<input type="text" required placeholder="Created by..." name="created_by" value="<?= $data['flyer_item']['created_by'] ?>" class="form-control">
								</div>
								<div class="form-group">
									<label>Upload banner</label>
									<input type="file" name="banner_url" class="form-control">
									<img width="80" src="<?= $data['flyer_item']['banner_url'] ?>" class="img img-thumbnail" alt="Flyer">
									<br>
								</div>
								<div class="form-group">
									<label>Upload File</label>
									<input type="file" name="file_url" multiple class="form-control" >
									<a target="_blank" href="<?= $data['flyer_item']['file_url'] ?>"><?= $data['flyer_item']['title'] ?></a>
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
