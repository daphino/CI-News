  <!-- =====================Content Section================= -->
  <section id="home">
    <div class="container">
      <h5 class="page-title">News Portal</h5>

      <? if(count($data) < 1): ?>
      <div class="alert alert-info text-center">
        <p class="mb-0">Content Unavailable.</p>
      </div>
      <? endif; ?>

      <?php foreach($data as $item): ?>

      <div class="card content-item">
        <div class="card-body">
          <div class="row">
            <div class="col-md-3">
              <img src="<?= base_url('uploads/'.$item['images'][0]['image_url']) ?>" class="img img-thumbnail" alt="">
            </div>
            <div class="col-md-9">
              <h3 class="news-title"><?= $item['title'] ?></h3>
              <p class="news-time">
                <?= date_formatted($item['updated_at']) ?>
              </p>
              <p class="news-desc-short">
              <?= $item['short_desc'] ?>
              </p>
              <a href="<?= base_url('detail/'.$item['id']) ?>" class="btn btn-primary btn-sm text-uppercase">view more</a>
            </div>
          </div>
        </div>
      </div>

      <?php endforeach ?>

    </div>
  </section>
  <!-- =====================End Content Section================= -->
