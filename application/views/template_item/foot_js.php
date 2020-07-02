
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>assets/AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/AdminLTE/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?php echo base_url(); ?>assets/AdminLTE/dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/AdminLTE/dist/js/demo.js"></script>

<!-- datepicker -->
<script src="<?php echo base_url(); ?>assets/AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/AdminLTE/bower_components/select2/dist/js/select2.full.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

<!-- page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script>
    $( function() {
        $('form').attr('autocomplete', 'off');

        $(".datepicker").datepicker({
          autoclose: true,
          // container: '#myModalWithDatePicker',
          format: 'yyyy-mm-dd',
          orientation: 'bottom'
        });
    });

    <?php if($this->session->flashdata('msg')=='success'){ ?>
      swal({
      title: "Sukses!",
      text: "Kuesioner berhasil disimpan. Terimakasih atas partisipasi anda!",
      type: "success"
      });
    <?php }elseif($this->session->flashdata('msg')=='error'){ ?>
      swal({
      title: "Gagal Menyimpan!",
      text: "Anda sudah melakukan input kuesioner",
      type: "warning"
      });
    <?php } ?>
  </script>

