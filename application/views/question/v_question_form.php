<section class="content">
	<div class="row">
		<div class="col-xs-12">
            <div class="col-sm-2" style="text-align:center">
                <img src="<?php echo base_url() ?>assets/img/logo-dumai.png" alt="">
            </div>
            <div class="col-sm-8" style="text-align:center">
                <h2>GUGUS TUGAS PERCEPATAN PENANGANAN COVID-19 KOTA DUMAI</h2>
            </div>
            <div class="col-sm-2" style="text-align:center">
                <img src="<?php echo base_url() ?>assets/img/logo-gugus.png" alt="">
            </div>
		</div>
	</div>
    <br><br>
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h1 class="box-title"><b>Kuesioner Pelaksanaan Protokol Kesehatan</b></h1>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<form action="<?php echo $action ?>" method="post" enctype="multipart/form-data"
						class="form-horizontal">
						<?php 
            $jum = count($question);
            echo '<input type="hidden" name="jumlah" value="'.$jum.'">';
            foreach ($question as $row) { ?>
						<div class="col-md-4" style="padding-right:25px;padding-left:25px">
							<!-- radio -->
							<div class="form-group">
								<?php echo '<b>'.$row->id_pertanyaan.'. '.$row->nama_pertanyaan.'</b>' ?>
								<?php 
                            $this->db->from('pertanyaan_jawaban');
                            $this->db->where('id_pertanyaan',$row->id_pertanyaan);
                            $query = $this->db->get()->result();
                            foreach ($query as $qq) { 
                        ?>
								<div class="radio">
									<label>
										<input type="radio" name="pertanyaan<?php echo $qq->id_pertanyaan ?>"
											value="<?php echo $qq->id_pertanyaan_jawaban ?>" required>
										<?php echo $qq->jawaban ?>
									</label>
								</div>
								<?php 
                            }
                        ?>
							</div>
						</div>
						<?php
            $mod = $row->id_pertanyaan%3;
            // echo $mod; 
            if ($row->id_pertanyaan%3==0) {
                echo '<div class="container col-lg-12"></div>';
            }
            }
            ?>
						<div class="form-group form-actions">
							<div class="col-md-12">
								<button type="submit" class="btn btn-block btn-md btn-primary"><i
										class="fa fa-angle-right"></i> Simpan</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
