<div class="d-flex" id="wrapper">

  <!-- Sidebar -->
  <div class="sidebar-bg" id="sidebar-wrapper">
    <div class="sidebar-heading text-center mt-3 mb-3">
      <img src="<?php echo base_url('asset/images/logo-labti.png'); ?>" width="75px" height="75px">
    </div>
    <div class="list-group list-group-flush">
      <a href="<?=base_url('admin/dashboard/')?>" class="list-group-item list-group-item-action sidebar-text bg-non">Biodata Calon Asisten</a>
      <a href="<?=base_url('admin/nilai/')?>" class="list-group-item list-group-item-action sidebar-text bg-non">Nilai Calon Asisten</a>
      <!-- <a href="<?=base_url('admin/wawancara/')?>" class="list-group-item list-group-item-action sidebar-text bg-non">Wawancara Calon Asisten</a> -->
      <a href="<?=base_url('admin/logout/')?>" class="list-group-item list-group-item-action sidebar-text bg-non">Logout</a>
    </div>
    <footer class="section-gap text-white">
      <div class="container">
        <div class="footer-bottom text-center">
          <p class="footer-text m-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
        </div>
      </div>
    </footer>
  </div>
  <!-- /#sidebar-wrapper -->

  <!-- Page Content -->
  <div id="page-content-wrapper">

    <nav class="navbar navbar-expand-lg navbar-light border-bottom nav-height">
      <button class="btn nav-btn" id="menu-toggle">
        <i class="fa fa-bars"></i>
      </button>
    </nav>