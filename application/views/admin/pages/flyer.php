<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12">

		<div class="card">
			<div class="card-header">
				<h3 class="card-title">News List</h3>
				<button type="button" class="float-right btn-sm btn btn-primary" data-toggle="modal" data-target="#add">Add Data</button>

				<div class="modal fade" id="add" tabindex="-1" role="dialog">
					<div class="modal-dialog modal-xl" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="add">Add Flyer</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<form action="<?= base_url('admin/flyer/add') ?>" method="post" enctype="multipart/form-data">
								<div class="modal-body">
									<div class="row">
										<div class="col-md-7">
											<div class="form-group">
												<input type="text" name="title" required class="form-control" placeholder="Enter news title">
											</div>
											<div class="form-group">
												<textarea name="description" required rows="5" placeholder="Enter description" class="form-control"></textarea>
											</div>

										</div>
										<div class="col-md-5">
											<div class="form-group">
												<label>Upload banner</label>
												<input type="file" name="banner_url" required class="form-control">
											</div>
											<div class="form-group">
												<label>Upload File</label>
												<input type="file" name="file_url" multiple class="form-control" required>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Save</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
			<div class="card-body">
				<table class="datatable table table-striped">
					<thead>
					<tr>
						<th>#</th>
						<th>Title</th>
						<th>created_by</th>
						<th>Date</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach($data['news'] as $x => $item): ?>
						<tr>
							<td><?= $x + 1 ?></td>
							<td><?= $item['title'] ?></td>
							<td><?= $item['created_by'] ?></td>
							<td><?= $item['created_at'] ?></td>
							<td>
								<a href="<?= base_url('admin/flyer/'.$item['id']) ?>/edit" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
								<a href="<?= base_url('admin/flyer/'.$item['id']) ?>/delete" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
							</td>
						</tr>
					<?php endforeach ?>
					</tbody>
					<tfoot>
					<tr>
						<th>#</th>
						<th>Title</th>
						<th>Short Desc</th>
						<th>Date</th>
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
