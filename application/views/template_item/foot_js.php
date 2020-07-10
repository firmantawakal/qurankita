
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

<<<<<<< HEAD
<script src="<?php echo base_url(); ?>assets/dark-mode/dark-mode.js"></script>
=======
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
>>>>>>> parent of a702ff9... last commit

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
<<<<<<< HEAD
  </script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#search1").autocomplete({
          source: "<?php echo site_url('daftar/get_autocomplete/?');?>",

          select: function (event, ui) {
                $(this).val(ui.item.label);
                $("#form_search").submit(); 
            }
        });
    });
</script>

<script>
//Get the button
var mybutton = document.getElementById("btnTop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
=======

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

>>>>>>> parent of a702ff9... last commit
