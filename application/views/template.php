<!DOCTYPE html>
<html>
<?php $this->load->view('template_item/head_css.php') ?>

<body class="hold-transition skin-blue-light sidebar-collapse">
<button onclick="topFunction()" id="btnTop" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
<div class="wrapper">

  

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

</div>
<!-- ./wrapper -->

<?php $this->load->view('template_item/foot_js.php') ?>

</body>
</html>
