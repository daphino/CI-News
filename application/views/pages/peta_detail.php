<div class="container" id="detail-news">
	<div class="row">
		<div class="col-md-8 col-sm-12">
			<div class="card">
				<div class="card-body">
					<h3 class="m-0"><?= $data['title'] ?></h3>
					<small style="color: #666;"><?= date_formatted($data['updated_at']) ?> | Oleh : <?= $data['name']?></small>

					<div class="image">
						<img class="img img-thumbnail" src="<?= base_url('assets/peta.jpg') ?>" alt="Detail flyer">
					</div>
					<hr>
					<p><?= $data['description'] ?></p>

					<hr>
					<div class="button-wrapper d-none d-md-block">
						<a href="<?= base_url('uploads/'.$data['file_url']) ?>" class="btn btn-primary btn-lg mt-3">Download</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
