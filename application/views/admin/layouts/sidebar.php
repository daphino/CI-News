<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="javascript:void(0)" class="brand-link">
      <span class="brand-text font-weight-light">Operator</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets/dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Corona Slayer</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?= base_url('admin/news') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Master News
              </p>
            </a>
          </li>
			<li class="nav-item">
				<a href="<?= base_url('admin/category') ?>" class="nav-link">
					<i class="nav-icon fas fa-th"></i>
					<p>
						Master Category
					</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('admin/data') ?>" class="nav-link">
					<i class="nav-icon fas fa-th"></i>
					<p>
						Data
					</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('admin/flyer') ?>" class="nav-link">
					<i class="nav-icon fas fa-th"></i>
					<p>
						Master Flyer
					</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('admin/peta') ?>" class="nav-link">
					<i class="nav-icon fas fa-th"></i>
					<p>
						Master Peta
					</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('admin/setting') ?>" class="nav-link">
					<i class="nav-icon fa fa-cogs"></i>
					<p>
						Setting
					</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('auth/logout') ?>" class="nav-link">
					<i class="nav-icon fa fa-arrow-circle-left"></i>
					<p>
						Logout
					</p>
				</a>
			</li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?= $title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        
