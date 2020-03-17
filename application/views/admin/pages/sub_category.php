<div class="row">
	<div class="col-md-12">

		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Category sub List</h3>
				<a href="<?= base_url("admin/category")?>" class="float-right btn-sm btn btn-primary" >Add Category</a>

			</div>
			<div class="card-body">

				<table class="datatable table table-striped">
					<thead>
					<tr>
						<th>#</th>
						<th>Title</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach($data as $x => $item): ?>
						<tr>
							<td><?= $x + 1 ?></td>
							<td><?= $item->name ?></td>
							<td>
								<a href="<?= base_url('admin/sub-category/'.$item->id) ?>/edit" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
								<a href="<?= base_url('admin/sub-category/'.$item->id) ?>/delete" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
							</td>
						</tr>
					<?php endforeach ?>
					</tbody>
					<tfoot>
					<tr>
						<th>#</th>
						<th>Title</th>
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
