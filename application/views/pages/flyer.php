<!-- =====================Content Section================= -->
<section id="peta">
	<div class="container">
		<h5 class="page-title">Info Flyer</h5>
		<? if(count($data) < 1): ?>
			<div class="alert alert-info text-center">
				<p class="mb-0">Content Unavailable.</p>
			</div>
		<? endif; ?>
		<div class="row">
			<?php foreach($data as $item):  ?>

			<div class="col-sm-12 col-md-6 col-lg-6">
				<div class="card peta-item">
					<div class="card-body">
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-6">
								<img src="<?= base_url("uploads/".$item['banner_url']) ?>" class="img fluid" alt="<?= $item['title'] ?>">
							</div>
							<div class="col-sm-12 col-md-6 desc-wrapper">
								<h6 class="mt-3"><?= $item['title']; ?></h6>
								<p class="mb-0">Oleh: <?= $item['name'] ?> </p>
								<div class="button-wrapper d-none d-md-block">
									<a href="<?= base_url('uploads/'.$item['file_url']) ?>" class="btn btn-primary btn-block mt-3">Download</a>
									<a href="<?= base_url('detail-flyer/'.$item['fid']) ?>" class="btn btn-secondary btn-block">Details</a>
								</div>
								<div class="d-block d-md-none">
									<a href="<?= base_url('uploads/'.$item['file_url']) ?>" class="btn btn-primary btn-block mt-3">Download</a>
									<a href="<?= base_url('detail-flyer/'.$item['fid']) ?>" class="btn btn-secondary btn-block">Details</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<!-- =====================End Content Section================= -->
