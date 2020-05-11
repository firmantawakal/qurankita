<!DOCTYPE html>
<html>
<?php $this->load->view('template_item/head_css.php') ?>

<body class="hold-transition skin-blue-light sidebar-mini fixed sidebar-collapse">
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
    <strong>Copyright &copy; 2020</strong> Diskominfo Kota Dumai.
  </footer>

</div>
<!-- ./wrapper -->

<?php $this->load->view('template_item/foot_js.php') ?>

</body>
</html>
