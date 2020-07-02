
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Invoice</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">

<!-- Theme style -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/AdminLTE/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/AdminLTE/dist/css/skins/skin-blue-light.css">
  
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
</head>
<!-- onload="window.print();" -->
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          Hasil Kuesioner Pelaksanaan Protokol Kesehatan
		  <small>Gugus Tugas Percepatan Penanganan Covid-19 Kota Dumai</small>
        </h2>
		<h4></h4>
      </div>
      <!-- /.col -->
    </div>
	<?php 
		$res = $jumlah_responden->jumlah_responden;
	?>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <address>
          <strong><h4>Jumlah Responden  :  <?php echo $res ?></h4></strong><br>
        </address>
      </div>
      <!-- /.col -->
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table style="margin-left:10px;margin-right:10px;" class="table table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Pertanyaan</th>
            <th>Jawaban / Jumlah</th>
          </tr>
          </thead>
          <tbody>
		  <?php
				$no=1;
				foreach($pertanyaan as $dt){
			?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td style="width:50%"><?php echo $dt->nama_pertanyaan ?></td>
					<td>
						<?php 
							$this->db->select('*');    
							$this->db->select('count(a.id_jawaban) as jumlah_jawaban');    
							$this->db->from('hasil a');
							$this->db->join('pertanyaan b', 'a.id_pertanyaan = b.id_pertanyaan');
							$this->db->join('pertanyaan_jawaban c', 'a.id_jawaban = c.id_pertanyaan_jawaban');
							$this->db->group_by('a.id_jawaban');
							$this->db->where('a.id_pertanyaan', $dt->id_pertanyaan);
							$query = $this->db->get()->result();

							$nn=1;
							echo '<table>';
							
							foreach ($query as $qq) { 
							$persen = ($qq->jumlah_jawaban/$res)*100;
							
							echo '<tr>
							<td style="vertical-align:text-top;padding-right:10px;">'.$nn++.'. </td>
							<td style="padding-right:10px;width:70%">'.$qq->jawaban.'</td>
							<td style="vertical-align:text-top;padding-right:5px">:</td>
							<td style="vertical-align:text-top;padding-right:10px;width:80%"><b>'.$qq->jumlah_jawaban.' ('.$persen.'%)</b></td>
							</tr>';
						
								
							}
						?>
						</table>
					</td>
				</tr>
			<?php 
			}
			?>
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
