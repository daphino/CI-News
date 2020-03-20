<section id="kantor">
	<div class="container">
		<h5 class="page-title">Kantor</h5>
		<div class="row mb-4">
			<div class="col-12 col-md-8 col-lg-8">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-sm-12 col-md-5 col-lg-3 text-center">
								<img src="<?= $data['banner_url'] ?>" alt="" class="rounded-circle img img-thumbnail" style="width: 150px;height: 150px;">
							</div>
							<div class="col-sm-12 col-md-7 col-lg-9">
								<h4 class="mt-3"><?= $data['name'] ?></h4>
								<p class="mb-0">
									<?= $data['description'] ?>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="d-flex my-4 sosial">
					<div><a href="<?= $data['location']?>"><i class="fas fa-map"></i> Location</a></div>
					<div><a href="<?= $data['instagram']?>"><i class="fab fa-instagram"></i> Instagram</a></div>
					<div><a href="<?= $data['twitter']?>"><i class="fab fa-twitter-square"></i> Twitter</a></div>
					<div><a href="<?= $data['facebook']?>"><i class="fab fa-facebook"></i> Facebook</a></div>
				</div>
			</div>
			<div class="col-12 col-md-4 col-lg-4">
				<div class="card">
					<div class="card-body">
						<div>
							<b class="text-uppercase">link terkait</b>
							<ul class="mt-3" id="links">
								<li><a href="">bontangkota.go.id</a></li>
								<li><a href="">PPID Utama Kota Bontang</a></li>
								<li><a href="">BPS Kota Bontang</a></li>
								<li><a href="">SIPD Kemendagri</a></li>
								<li><a href="">Petakita Kota Bontang</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
