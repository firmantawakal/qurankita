<!DOCTYPE html>
<html>
<?php $this->load->view('template_item/head_css.php') ?>

<body class="hold-transition skin-blue-light layout-top-nav">
<div class="wrapper">

  

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
  

</div>
<!-- ./wrapper -->

<?php $this->load->view('template_item/foot_js.php') ?>

</body>
</html>
