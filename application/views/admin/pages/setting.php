<div class="row">
	<div class="col-md-6">

		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Setting App</h3>


			</div>
			<div class="card-body">
				<form action="<?= base_url("admin/setting/".$data['id']."/update") ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input type="text" name="name" required class="form-control" value="<?= $data['name'] ?>">
					</div>
					<div class="form-group">
						<label for="">Banner</label>
						<input type="file" name="banner"  class="form-control">
						<img width="80" src="<?= base_url('uploads/'.$data['banner_url']) ?>" class="img img-thumbnail" alt="Setting">
						<br>
					</div>

					<div class="form-group">
						<label for="">Description</label>
						<textarea class="form-control" name="description" id="" cols="30" rows="4"><?= $data['description'] ?></textarea>
					</div>
					<div class="form-group">
						<label for="">Location</label>
						<input type="text" name="location"  class="form-control" value="<?= $data['location'] ?>">
					</div>

					<div class="form-group">
						<label for="">Instagram</label>
						<input type="text" name="instagram"  class="form-control" value="<?= $data['instagram'] ?>">
					</div>

					<div class="form-group">
						<label for="">Twitter</label>
						<input type="text" name="twitter"  class="form-control" value="<?= $data['twitter'] ?>">
					</div>

					<div class="form-group">
						<label for="">Facebook</label>
						<input type="text" name="twitter"  class="form-control" value="<?= $data['facebook'] ?>">
					</div>

					<button type="submit" class="btn btn-primary">Save</button>
				</form>
			</div>
		</div>
	</div>

</div>

<script>
	$(document).ready(function() {

	})
</script>
