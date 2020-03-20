<div class="container" id="detail-news">
	<div class="row">
		<div class="col-md-8 col-sm-12">
			<div class="card">
				<div class="card-body">
					<h3 class="m-0"><?= $data['title'] ?></h3>
					<small style="color: #666;"><?= date_formatted($data['updated_at']) ?> | Oleh : <?= $data['created_by']?></small>

					<div class="image mt-3">
						<img class="img img-thumbnail" src="<?= $data['banner_url'] ?>" alt="Detail flyer">
					</div>

					<p class="mt-3"><?= $data['description'] ?></p>

					<hr>
					<div class="button-wrapper d-none d-md-block">
						<a href="<?= $data['file_url'] ?>" target="_blank" class="btn btn-primary btn-lg mt-3">Download</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
