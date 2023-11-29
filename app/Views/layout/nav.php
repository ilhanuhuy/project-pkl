<!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url('foto/'.session()->get('foto_user')) ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <br>
          <p><i class="fa fa-circle text-success"></i> <?php if( session()->get('level') ==1 ){
                    echo 'Admin';
                  }else if ( session()->get('level') ==2 ){
                    echo 'Pekerja';
                  } else {
                    echo 'Peserta';
                  }
                  ?></p>

        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Soal</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('topik')?>"><i class="fa fa-circle-o"></i>Topik Test</a></li>
            <li><a href="<?=base_url('tambah')?>"><i class="fa fa-circle-o"></i> Tambah Soal Test</a></li>
            <li><a href="<?=base_url('soal')?>"><i class="fa fa-circle-o"></i> Daftar Soal Test</a></li>
            </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Test</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <<li><a href="<?=base_url('test')?>"><i class="fa fa-circle-o"></i> Test</a></li>
            <li><a href="<?=base_url('hasil')?>"><i class="fa fa-circle-o"></i> Hasil Test</a></li>
            </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>"><i class="fa fa-circle-o"></i>Data Peserta</a></li>
            <li><a href="<?=base_url()?>"><i class="fa fa-circle-o"></i>User</a></li>
          </ul>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $title ?>
      </h1>
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?= $title ?></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">