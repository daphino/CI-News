<div class="container" id="detail-news">
  <div class="row">
    <div class="col-md-8 col-sm-12">
      <div class="card">
        <div class="card-body">
          <h3 class="m-0"><?= $data['title'] ?></h3>
          <small style="color: #666;"><?= date_formatted($data['updated_at']) ?></small>

          <div id="demo" class="carousel slide" data-ride="carousel" style="margin-top: 20px;">
            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
              <?php foreach($data['images'] as $key => $item ): ?>
                <div class="carousel-item my-3 <?php if($key == 0) { echo 'active'; } ?>">
                  <img src="<?= $item['image_url'] ?>" class="d-block w-100" alt="<?= $data['title'] ?>" style="max-height: 300px;">
                </div>
              <?php endforeach; ?>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>

          <p><?= $data['content'] ?></p>
          
        </div>
      </div>
    </div>
    <!-- <div class="col-md-4 col-sm-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Related</h5>
            
          </div>
        </div>
    </div> -->
  </div>
</div>