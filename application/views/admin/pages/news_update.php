<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<form action="<?= base_url("admin/news/".$data['id']."/update") ?>" method="post" enctype="multipart/form-data">
			<div class="modal-body">
				<div class="row">
					<div class="col-md-7">
						<div class="form-group">
							<input type="text" name="title" required class="form-control" placeholder="Enter news title" value="<?= $data['title']?>">
						</div>
						<div class="form-group">
							<textarea name="short_desc" required rows="1" placeholder="Enter short description" class="form-control"><?= $data['short_desc']?></textarea>
						</div>
						<div class="form-group">
							<textarea name="content" id="ckeditor" requried class="form-control ckeditor"><?= $data['content'] ?></textarea>
						</div>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<input type="text" name="published" placeholder="Enter news published" value="<?= $data['published']?>" required class="form-control">
						</div>
						<div class="form-group">
							<label>Upload images</label>
							<small>You can upload multiple images.</small>
							<input type="file" name="files[]" multiple class="form-control"  accept="image/*">
						</div>
						<?php foreach($data['images'] as $key => $item ): ?>
						<img src="<?= base_url('uploads/'.$item['image_url']) ?>" width="80" class="img img-thumbnail" alt="">
						<?php endforeach; ?>
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
