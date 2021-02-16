<div class="d-flex" id="wrapper">

  <!-- Sidebar -->
  <div class="sidebar-bg" id="sidebar-wrapper">
    <div class="sidebar-heading text-center mt-3 mb-3">
      <img src="<?php echo base_url('asset/images/kemenkes.png'); ?>" width="200" height="150">
    </div>
    <div class="list-group list-group-flush">
      <a href="<?=base_url('admin/dashboard_admin/')?>" class="list-group-item list-group-item-action sidebar-text bg-non">Rekap INM Bulanan</a>
      <a href="<?=base_url('admin/rekap_tahunan/')?>" class="list-group-item list-group-item-action sidebar-text bg-non">Rekap INM Tahunan</a>
      <!-- <a href="<?=base_url('admin/wawancara/')?>" class="list-group-item list-group-item-action sidebar-text bg-non">Wawancara Calon Asisten</a> -->
      <a href="<?=base_url('admin/logout/')?>" class="list-group-item list-group-item-action sidebar-text bg-non">Logout</a>
    </div>
    
  </div>
  <!-- /#sidebar-wrapper -->

  <!-- Page Content -->
  <div id="page-content-wrapper">

    <nav class="navbar navbar-light border-bottom nav-height">
      <button class="btn nav-btn nav-text" id="menu-toggle">
        <i class="fa fa-bars"></i>
      </button>
      <div class="nav-text mr-3">
        <ul>INDIKATOR NASIONAL</ul>
        <ul>MUTU</ul>
        </div>
    </nav>