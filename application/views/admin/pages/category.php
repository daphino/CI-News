<div class="row">
	<div class="col-md-4">

		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Add Category</h3>


			</div>
			<div class="card-body">
				<form action="<?= base_url("admin/category/add") ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input type="text" name="name" required class="form-control">
					</div>
					<div class="form-group">
						<label for="">Parrent</label>
						<select name="parent" id="" class="form-control">
							<option value="none">None</option>
							<?php foreach ($data as $datum): ?>
								<option value="<?= $datum['id'] ?>"> <?= $datum['name'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label for="">Image</label> *Parrent category only
						<input type="file" name="file">
					</div>
					<button class="btn btn-primary">Save</button>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-8">

		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Category parrent List</h3>

			</div>
			<div class="card-body">

				<table class="datatable table table-striped">
					<thead>
					<tr>
						<th>#</th>
						<th>Title</th>
						<th>Child</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach($data as $x => $item): ?>
						<tr>
							<td><?= $x + 1 ?></td>
							<td><?= $item['name'] ?></td>
							<td><?= $item['child'] ?></td>
							<td>
								<a href="<?= base_url('admin/category/'.$item['id']) ?>/sub" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
								<a href="<?= base_url('admin/category/'.$item['id']) ?>/edit" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
								<a href="<?= base_url('admin/category/'.$item['id']) ?>/delete" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
							</td>
						</tr>
					<?php endforeach ?>
					</tbody>
					<tfoot>
					<tr>
						<th>#</th>
						<th>Title</th>
						<th>Child</th>
						<th>Action</th>
					</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {

	})
</script>
