<div class="row">
	<div class="col-md-4">

		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Edit Parent Category</h3>


			</div>
			<div class="card-body">
				<form action="<?= base_url("admin/sub-category/".$data['category_item']['id']."/update") ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input type="text" name="name" required class="form-control" value="<?= $data['category_item']['name'] ?>">
					</div>
					<div class="form-group">
						<label for="">Parrent</label>
						<select name="parent" id="" class="form-control">
							<?php foreach ($data['categories'] as $datum): ?>
								<option <?php if($data['category_item']['parent_id'] == $datum->id) {echo  "selected";} ?> value="<?= $datum->id ?>"> <?= $datum->name ?></option>
							<?php endforeach;  print_r($data['categories']) ?>
						</select>
					</div>

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
