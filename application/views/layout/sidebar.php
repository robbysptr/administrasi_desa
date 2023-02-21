<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <a href="home/profile" class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/dist/img/default.png" class="img-circle" alt="User Image">
        </a>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('role')?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url(); ?>">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <?php if ($this->session->userdata('role')=='Bagian Pelayanan' OR $this->session->userdata('role')=='Admin'): ?>
        <li>
          <a href="<?php echo site_url('Datawarga/add'); ?>">
            <i class="fa fa-book"></i>
            <span>Input Data Warga</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('Datawarga'); ?>">
            <i class="fa fa-laptop"></i>
            <span>Lihat Data Warga</span>
          </a>
        </li>
         <li>
          <a href="<?php echo site_url('Domisili/add'); ?>">
            <i class="fa fa-book"></i>
            <span>Input Data Surat Domisili</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('Domisili'); ?>">
            <i class="fa fa-laptop"></i>
            <span>Lihat Data Domisili</span>
          </a>
        </li>
        <?php endif; ?>
        <li>
          <a href="<?php echo site_url('Laporan'); ?>">
            <i class="fa fa-edit"></i> <span>Laporan</span>
          </a>
        </li>
        <li class="treeview">
    		  <a href="#">
    			<i class="fa fa-print"></i> <span>Cetak Dokumen</span>
    			<span class="pull-right-container">
    			  <i class="fa fa-angle-left pull-right"></i>
    			</span>
    		  </a>
    		  <ul class="treeview-menu">
    			   <li><a href="laporan/cetak/warga" target="_blank"> &nbsp; <i class="fa fa-file-o"></i>Data Warga</a></li>
             <li><a href="laporan/cetak/domisili" target="_blank"> &nbsp; <i class="fa fa-file-o"></i>Data Domisili</a></li>
    		  </ul>
    		</li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
