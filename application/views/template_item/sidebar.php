<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li><a href="<?php echo site_url('pasien') ?>"><i class="fa fa-users"></i><span> Pasien</span></a></li>
        <?php if ($this->session->userdata('role')=='admin') {
            echo '<li><a href="'.site_url('user').'"><i class="fa fa-user"></i><span> User</span></a></li>';
        } ?>
      </ul>
        
    </section>
    <!-- /.sidebar -->
  </aside>