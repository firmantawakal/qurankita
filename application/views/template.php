<!DOCTYPE html>
<html>
<?php $this->load->view('template_item/head_css.php') ?>

<<<<<<< HEAD
<body class="hold-transition skin-blue-light sidebar-collapse">
<button onclick="topFunction()" id="btnTop" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
=======
<body class="hold-transition skin-blue-light layout-top-nav">
>>>>>>> parent of a702ff9... last commit
<div class="wrapper">

  

<<<<<<< HEAD
  <?php $this->load->view('template_item/header.php') ?>

  <?php $this->load->view('template_item/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <?php echo $contents; ?>
    
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <small><strong>Copyright &copy; 2020</strong> Quran Kita.</small>
  </footer>
=======
  <?php //$this->load->view('template_item/header.php') ?>

  <?php //$this->load->view('template_item/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
      <?php echo $contents; ?>
    </div>
  </div>
  <!-- /.content-wrapper -->
  <?php if ($this->uri->segment(2)!='print') { ?>
    <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Copyright &copy; 2020</strong> Gugus Tugas Covid-19 Kota Dumai.
  </footer>
  <?php } ?>
  
>>>>>>> parent of a702ff9... last commit

</div>
<!-- ./wrapper -->

<?php $this->load->view('template_item/foot_js.php') ?>

</body>
</html>
