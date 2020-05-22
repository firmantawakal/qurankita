<script type="text/javascript">
 
  window.onload = addNewRow();

  function addNewRow(){
        $("#empData").append('<tr>'
        + '<td>'
        + '<div class="col-md-3">'
        + '	<div class="form-group">'
        + '<label>Nama</label>'
        + '	<input type="text" class="form-control" name="form11_1[]" value="" autocomplete="off">'
        + '</div>'
        + '</div>'
        + '	<div class="col-md-3">'
        + '	<div class="form-group">'
        + '	<label>Umur</label>'
        + '	<input type="number" class="form-control" name="form11_2[]" value="" autocomplete="off">'
        + '	</div>'
        + '</div>'
        + '<div class="col-md-3">'
        + '	<div class="form-group">'
        + '		<label>Jenis Kelamin</label>'
        + '		<select name="form11_3[]" class="form-control" autocomplete="off">'
        + '			<option value="laki-laki">Laki - Laki</option>'
        + '		<option value="perempuan">Perempuan</option>'
									+ '	</select>'
                  + '	</div>'
                  + '	</div>'
                  + '<div class="col-md-3">'
                  + '	<div class="form-group">'
                  + '		<label>Hubungan Dengan Kasus</label>'
                  + '		<input type="text" id="form11_4" class="form-control" name="form11_4[]" value="" autocomplete="off">'
                  + '	</div>'
                  + '	</div>'
                  + '	<div class="col-md-3">'
                  + '	<div class="form-group">'
                  + '		<label>Alamat Rumah</label>'
                  + '		<input type="text" class="form-control" name="form11_5[]" value="" autocomplete="off">'
                  + '		</div>'
                  + '	</div>'
                  + '	<div class="col-md-3">'
                  + '	<div class="form-group">'
                  + '			<label>No. HP</label>'
                    + '			<input type="number" class="form-control" name="form11_6[]" value="" autocomplete="off">'
                    + '		</div>'
                    + '	</div>'
                    + '	<div class="col-md-6">'
                    + '		<div class="form-group">'
                    + '			<label>Aktivitas yang Dilakukan</label>'
                    + '			<input type="text" class="form-control" name="form11_7[]" value="" autocomplete="off">'
                    + '	</div>'
                    + '	</div>'
                    + '	</td>'
                    + '	<td style="width: 10px;"><button type="button" class="btn btn-danger btn-xs" onClick="deleteRow(this)"><i class="fa fa-minus"></i></button></td>'
                    + '	</tr><hr>');
  }

  function deleteRow(element){
    var table = document.getElementById("empData");
    var totalRowCount = table.rows.length;
    if (totalRowCount > 1) {
      $(element).parent().parent().remove();    
    }
  }

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

  function yesnoCheck2() {
    if (document.getElementById('yes14').checked) {
        document.getElementById('form7a_hide').style.display = 'block';
    }
    else {
      document.getElementById('form7a_hide').style.display = 'none'
    };
  }

  function yesnoCheck3() {
    if (document.getElementById('yes15').checked) {
        document.getElementById('form7b_hide').style.display = 'block';
    }
    else {
      document.getElementById('form7b_hide').style.display = 'none'
    };
  }

  function yesnoCheck4() {
    var i = 16;
    while (i < 20) {
      if (document.getElementById('yes'+i).checked) {
          document.getElementById('hide'+i).style.display = 'block';
      }
      else {
        document.getElementById('hide'+i).style.display = 'none'
      };
      i++;
    }
  }

  function yesnoCheck5() {
    var i = 20;
    while (i < 24) {
      if (document.getElementById('yes'+i).checked) {
          document.getElementById('hide'+i).style.display = 'block';
      }
      else {
        document.getElementById('hide'+i).style.display = 'none'
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