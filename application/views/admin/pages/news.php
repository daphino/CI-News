<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">
    
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">News List</h3>
        <button type="button" class="float-right btn-sm btn btn-primary" data-toggle="modal" data-target="#add">Add News</button>

        <div class="modal fade" id="add" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="add">Add News</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="<?= base_url('admin/news') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-7">
                      <div class="form-group">
                        <input type="text" name="title" required class="form-control" placeholder="Enter news title">
                      </div>
                      <div class="form-group">
                        <textarea name="short_desc" required rows="1" placeholder="Enter short description" class="form-control"></textarea>
                      </div>
                      <div class="form-group">
                        <textarea name="content" id="ckeditor" requried class="form-control ckeditor"></textarea>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="form-group">
                        <input type="text" name="published" placeholder="Enter news published" required class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Upload images</label>
                        <small>You can upload multiple images.</small>
                        <input type="file" name="files[]" multiple class="form-control" required accept="image/*">
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
              <th>Short Desc</th>
              <th>Contents</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($data as $x => $item): ?>
              <tr>
                <td><?= $x + 1 ?></td>
                <td><?= $item['title'] ?></td>
                <td><?= $item['short_desc'] ?></td>
                <td><?= $item['content'] ?></td>
                <td><?= $item['updated_at'] ?></td>
                <td>
                  <a href="<?= base_url('admin/newsupdate/'.$item['id']) ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                  <a href="<?= base_url('admin/newsdelete/'.$item['id']) ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
          <tfoot>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Short Desc</th>
              <th>Contents</th>
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