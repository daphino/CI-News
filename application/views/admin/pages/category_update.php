<div class="row">
	<div class="col-md-4">

		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Edit Parent Category</h3>


			</div>
			<div class="card-body">
				<form action="<?= base_url("admin/category/".$data['category_item']['id']."/update") ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input type="text" name="name" required class="form-control" value="<?= $data['category_item']['name'] ?>">
					</div>
					<div class="form-group">
						<label for="">Image</label> *Parrent category only
						<input type="file" name="file">
					</div>
					<img src="<?= base_url('uploads/'.$data['category_item']['image_url']) ?>" width="80" class="img img-thumbnail" alt="">
					<br> <br>
					<button class="btn btn-primary">Update</button>
				</form>
			</div>
		</div>
	</div>

</div>

<script>
	$(document).ready(function() {

	})
</script>
