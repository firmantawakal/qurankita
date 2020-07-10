<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    City
  </h1>
</section>

<section class="content">
  <div class="row">
    <div class='col-md-5'>

      <h3>Menu Select Dinamis</h3>

      <div class='form-group'>
        <label>Provinsi</label>
        <select class='form-control' id='provinsi'>
          <option value='0'>--pilih--</option>
          <?php
          foreach ($provinsi as $prov) {
            echo "<option value='$prov[id]'>$prov[name]</option>";
          }
          ?>
        </select>
      </div>

      <div class='form-group'>
        <label>Kabupaten/kota</label>
        <select class='form-control' id='kabupaten-kota'>
          <option value='0'>--pilih--</option>
        </select>
      </div>


      <div class='form-group'>
        <label>Kecamatan</label>
        <select class='form-control' id='kecamatan'>
          <option value='0'>--pilih--</option>
        </select>
      </div>


      <div class='form-group'>
        <label>Kelurahan/desa</label>
        <select class='form-control' id='kelurahan-desa'>
          <option value='0'>--pilih--</option>
        </select>
      </div>

    </div>
  </div>
</section>

<script type="text/javascript">
  $(function() {
    $.ajaxSetup({
      type: "POST",
      url: "<?php echo base_url('city/ambil_data') ?>",
      cache: false,
    });

    $("#provinsi").change(function() {

      var value = $(this).val();
      if (value > 0) {
        $.ajax({
          data: {
            modul: 'kabupaten',
            id: value
          },
          success: function(respond) {
            $("#kabupaten-kota").html(respond);
          }
        })
      }
    });

    $("#kabupaten-kota").change(function() {
      var value = $(this).val();
      if (value > 0) {
        $.ajax({
          data: {
            modul: 'kecamatan',
            id: value
          },
          success: function(respond) {
            $("#kecamatan").html(respond);
          }
        })
      }
    });

    $("#kecamatan").change(function() {
      var value = $(this).val();
      if (value > 0) {
        $.ajax({
          data: {
            modul: 'kelurahan',
            id: value
          },
          success: function(respond) {
            $("#kelurahan-desa").html(respond);
          }
        })
      }
    });

  })
</script>