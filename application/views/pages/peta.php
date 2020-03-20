<!-- =====================Content Section================= -->
<section id="peta">
	<div class="container">
		<h5 class="page-title">Info Peta</h5>
		<?php if(count($data) < 1): ?>
			<div class="alert alert-info text-center">
				<p class="mb-0">Content Unavailable.</p>
			</div>
		<?php endif; ?>

		<div class="row">
			<?php foreach($data as $item):  ?>

				<div class="col-sm-12 col-md-6 col-lg-6">
					<div class="card peta-item">
						<div class="card-body">
							<div class="row">
								<div class="col-sm-12 col-md-6 col-lg-6">
									<img src="<?= $item['banner_url'] ?>" class="img fluid" alt="<?= $item['title'] ?>">
								</div>
								<div class="col-sm-12 col-md-6 desc-wrapper">
									<h6 class="mt-3"><?= $item['title']; ?></h6>
									<p class="mb-0">Oleh: <?= $item['created_by'] ?> </p>
									<div class="button-wrapper d-none d-md-block">
										<a href="<?= $item['file_url'] ?>" target="_blank" class="btn btn-primary btn-block mt-3">Download</a>
										<a href="<?= base_url('detail-peta/'.$item['id']) ?>" class="btn btn-secondary btn-block">Details</a>
									</div>
									<div class="d-block d-md-none">
										<a href="<?= $item['file_url'] ?>" target="_blank" class="btn btn-primary btn-block mt-3">Download</a>
										<a href="<?= base_url('detail-peta/'.$item['id']) ?>" class="btn btn-secondary btn-block">Details</a>
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
