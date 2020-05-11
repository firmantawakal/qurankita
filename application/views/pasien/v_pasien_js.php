<script type="text/javascript">
  function yesnoCheck() {
    var i = 1;
    while (i < 14) {
      if (document.getElementById('yes'+i).checked) {
          document.getElementById('time'+i).style.display = 'block';
      }
      else {
        document.getElementById('time'+i).style.display = 'none'
      };
      i++;
    }
  }

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

    // ===========================================

    $("#provinsi2").change(function() {

    var value = $(this).val();
    if (value > 0) {
      $.ajax({
        data: {
          modul: 'kabupaten',
          id: value
        },
        success: function(respond) {
          $("#kabupaten-kota2").html(respond);
        }
      })
    }
    });

    $("#kabupaten-kota2").change(function() {
    var value = $(this).val();
    if (value > 0) {
      $.ajax({
        data: {
          modul: 'kecamatan',
          id: value
        },
        success: function(respond) {
          $("#kecamatan2").html(respond);
        }
      })
    }
    });

    $("#kecamatan2").change(function() {
    var value = $(this).val();
    if (value > 0) {
      $.ajax({
        data: {
          modul: 'kelurahan',
          id: value
        },
        success: function(respond) {
          $("#kelurahan-desa2").html(respond);
        }
      })
    }
    });

  })
</script>