<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Tambah Pasien
	</h1>
</section>

<section class="content">
	<form action="<?php echo $action ?>" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary box-solid">
				<div class="box-header">
					<b>Petugas medis/Paramedis/Relawan kesehatan</b>
				</div>
				<!-- form start -->
					<div class="box-body">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>Tipe Fasyankes</label>
									<input type="text" class="form-control" name="form11" value="" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Kode Fasyankes</label>
									<input type="text" class="form-control" name="form12" value="" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Nama Fasilitas Pelayanan Kesehatan</label>
									<input type="text" class="form-control" name="form13" value="" required>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Provinsi Fasyankes</label>
									<select class="form-control select2" id="provinsi" style="width: 100%;"
										name="form14">
										<option value='0'>--pilih--</option>
										<?php
                                        foreach ($provinsi as $prov) {
                                            echo "<option value='$prov[id]'>$prov[name]</option>";
                                        }
                                        ?>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Kota/Kab Fasyankes</label>
									<select class="form-control select2" id="kabupaten-kota" style="width: 100%;"
										name="form15">
										<option value='0'>--pilih--</option>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Kecamatan Fasyankes</label>
									<select class="form-control select2" id="kecamatan" style="width: 100%;"
										name="form16">
										<option value='0'>--pilih--</option>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Kelurahan Fasyankes</label>
									<select class="form-control select2" id="kelurahan-desa" style="width: 100%;"
										name="form17">
										<option value='0'>--pilih--</option>
									</select>
								</div>
							</div>
							<br>
							<hr>
							<div class="col-md-4">
								<div class="form-group">
									<label>Nama Pewawancara</label>
									<input type="text" class="form-control" name="form18" value="" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>No Hp Pewawancara</label>
									<input type="number" class="form-control" name="form19" value="" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Tanggal Wawancara</label>
									<input type="text" class="form-control datepicker" name="form110" value=""
										required>
								</div>
							</div>
						</div>
					</div>
					<!-- /.box-body -->
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary box-solid">
				<div class="box-header">
					<b>Identitas Pasien</b>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-5">
							<div class="form-group">
								<label>Nama Pasien</label>
								<input type="text" class="form-control" name="form2_1" value="" required>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>No HP</label>
								<input type="number" class="form-control" name="form2_2" value="" required>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Jenis Kelamin</label>
								<select name="form2_3" class="form-control">
									<option value="laki-laki">Laki - Laki</option>
									<option value="perempuan">Perempuan</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Kewarganegaraan</label>
								<select name="form2_4" class="form-control">
									<option value="WNI">WNI</option>
									<option value="WNA">WNA</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label>Pekerjaan</label>
								<input type="text" class="form-control" name="form2_5" value="">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Tempat Lahir</label>
								<input type="text" class="form-control" name="form2_6" value="" required>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Tanggal Lahir</label>
								<input type="text" class="form-control datepicker" name="form2_7" value="" required>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Usia</label>
								<input type="number" class="form-control" name="form2_8" value="" required>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>NIK</label>
								<input type="text" class="form-control" name="form2_9" value="" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label>Provinsi</label>
								<select class="form-control select2" id="provinsi2" style="width: 100%;" name="form2_10"
									required>
									<option value='0'>--pilih--</option>
									<?php
                                        foreach ($provinsi as $prov2) {
                                            echo "<option value='$prov2[id]'>$prov2[name]</option>";
                                        }
                                        ?>
								</select>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Kota/Kab.</label>
								<select class="form-control select2" id="kabupaten-kota2" style="width: 100%;"
									name="form2_11" required>
									<option value='0'>--pilih--</option>
								</select>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Kecamatan</label>
								<select class="form-control select2" id="kecamatan2" style="width: 100%;"
									name="form2_12" required>
									<option value='0'>--pilih--</option>
								</select>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Kelurahan</label>
								<select class="form-control select2" id="kelurahan-desa2" style="width: 100%;"
									name="form2_13" required>
									<option value='0'>--pilih--</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>NKK</label>
								<input type="text" class="form-control" name="form2_14" value="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label>RT</label>
								<input type="text" class="form-control" name="form2_15" value="">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>RW</label>
								<input type="text" class="form-control" name="form2_16" value="">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Jalan</label>
								<input type="text" class="form-control" name="form2_17" value="" required>
							</div>
						</div>
						<div class="col-md-3">
							<label>Kategori</label>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="radio" name="form2_18" value="PASIEN DALAM PENGAWASAN">
										PASIEN DALAM PENGAWASAN
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form2_18" value="ORANG DALAM PEMANTAUAN">
										ORANG DALAM PEMANTAUAN
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form2_18" value="ORANG TANPA GEJALA">
										ORANG TANPA GEJALA
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form2_18" value="KONTAK ERAT">
										KONTAK ERAT
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form2_18" value="PELAKU PERJALANAN">
										PELAKU PERJALANAN
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary box-solid">
				<div class="box-header">
					<b>Riwayat Sosial – Ekonomi</b>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-6">
							<label>Aktivitas Fisik</label>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="radio" name="form3_1" value="Sedenter" required>
										Sedenter
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form3_1"
											value="Latihan fisik < 150 menit/minggu (3 x 50 menit/minggu atau 5 x 30 menit/minggu)"
											required>
										Latihan fisik < 150 menit/minggu (3 x 50 menit/minggu atau 5 x 30 menit/minggu)
											</label> </div> <div class="radio">
											<label>
												<input type="radio" name="form3_1"
													value="Latihan fisik ≥ 150 menit/minggu (3 x 50 menit/minggu atau 5 x 30 menit/minggu)"
													required>
												Latihan fisik ≥ 150 menit/minggu (3 x 50 menit/minggu atau 5 x 30
												menit/minggu)
											</label>
								</div>
							</div>
							<br>
							<label>Keanggotaan BPJS</label>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="radio" name="form3_2" value="Ya" required>
										Ya
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form3_2" value="Tidak" required>
										Tidak
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form3_2" value="Tidak Tahu" required>
										Tidak Tahu
									</label>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<label>Merokok</label>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="radio" name="form3_3" value="Ya" required>
										Ya
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form3_3" value="Tidak" required>
										Tidak
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form3_3" value="Tidak Tahu" required>
										Tidak Tahu
									</label>
								</div>
							</div>
							<br>
							<label>Konsumsi Minuman Beralkohol</label>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="radio" name="form3_4" value="Ya" required>
										Ya
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form3_4" value="Tidak" required>
										Tidak
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form3_4" value="Tidak Tahu" required>
										Tidak Tahu
									</label>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<label>Penghasilan</label>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="radio" name="form3_5" value="TIDAK BERPENGHASILAN">
										TIDAK BERPENGHASILAN
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form3_5" value="< 1 Juta">
										< 1 Juta </label> </div> <div class="radio">
											<label>
												<input type="radio" name="form3_5" value="1 s/d 3 Juta">
												1 s/d 3 Juta
											</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form3_5" value="> 3 s/d 5 Juta">
										> 3 s/d 5 Juta
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form3_5" value="> 5 s/d 10 Juta">
										> 5 s/d 10 Juta
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form3_5" value="> 10 Juta">
										> 10 Juta
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Nomor BPJS</label>
								<input type="text" class="form-control" name="form3_6" value="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary box-solid">
				<div class="box-header">
					<b>Pemeriksaan Fisik</b>
				</div>
				<div class="box-body">
					Tanda-tanda vital dan status gizi
					<hr>
					<div class="row">
						<div class="col-md-2">
							<label>Suhu</label>
							<div class="input-group">
								<input type="number" class="form-control" name="form4_1">
								<span class="input-group-addon">C</span>
							</div>
						</div>
						<div class="col-md-2">
							<label>Tekanan Darah</label>
							<div class="input-group">
								<input type="number" class="form-control" name="form4_2">
								<span class="input-group-addon">mmHg</span>
							</div>
						</div>
						<div class="col-md-2">
							<label>Nadi</label>
							<div class="input-group">
								<input type="number" class="form-control" name="form4_3">
								<span class="input-group-addon">x/menit</span>
							</div>
						</div>
						<div class="col-md-2">
							<label>Pernapasan</label>
							<div class="input-group">
								<input type="number" class="form-control" name="form4_4">
								<span class="input-group-addon">x/menit</span>
							</div>
						</div>
						<div class="col-md-2">
							<label>Tinggi Badan</label>
							<div class="input-group">
								<input type="number" class="form-control" name="form4_5">
								<span class="input-group-addon">cm</span>
							</div>
						</div>
						<div class="col-md-2">
							<label>Berat Badan</label>
							<div class="input-group">
								<input type="number" class="form-control" name="form4_6">
								<span class="input-group-addon">kg</span>
							</div>
						</div>
					</div>
					<div class="row">
						<hr>
						<div class="col-md-12">
							<div class="form-group">
								<label>Hasil Triage (kalau ke UGD)</label>
								<input type="text" class="form-control" name="form4_7" value="">
							</div>
						</div>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary box-solid">
				<div class="box-header">
					<b>Informasi Klinis</b>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-3">
							<label>Demam</label>
							<div class="form-group">
								<label class="radio-inline">
									<input type="radio" name="form5_1a" onclick="yesnoCheck();" id="yes1" value="Ya"
										required>
									Ya
								</label>
								<label class="radio-inline">
									<input type="radio" name="form5_1a" onclick="yesnoCheck();" id="no1" value="Tidak"
										checked required>
									Tidak
								</label>
								<label class="radio-inline">
									<input type="radio" name="form5_1a" onclick="yesnoCheck();" id="no1b"
										value="Tidak Tahu" required>
									Tidak Tahu
								</label>
							</div>
							<div id="time1" style="display:none">
								<select name="form5_1b" class="form-control" style="width: 100%;">
									<option value=''>--Waktu Keluhan--</option>
									<option value='Muncul &#8804; 14 hari'>Muncul &#8804; 14 hari</option>
									<option value='Muncul &#8805; 14 hari'>Muncul &#8805; 14 hari</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<label>Sesak Napas</label>
							<div class="form-group">
								<label class="radio-inline">
									<input type="radio" name="form5_2a" onclick="yesnoCheck();" id="yes2" value="Ya"
										required>
									Ya
								</label>
								<label class="radio-inline">
									<input type="radio" name="form5_2a" onclick="yesnoCheck();" id="no2" value="Tidak"
										checked required>
									Tidak
								</label>
								<label class="radio-inline">
									<input type="radio" name="form5_2a" onclick="yesnoCheck();" id="no2b"
										value="Tidak Tahu" required>
									Tidak Tahu
								</label>
							</div>
							<div id="time2" style="display:none">
								<select name="form5_2b" class="form-control" style="width: 100%;">
									<option value=''>--Waktu Keluhan--</option>
									<option value='Muncul &#8804; 14 hari'>Muncul &#8804; 14 hari</option>
									<option value='Muncul &#8805; 14 hari'>Muncul &#8805; 14 hari</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<label>Lemas Dan Lemah</label>
							<div class="form-group">
								<label class="radio-inline">
									<input type="radio" name="form5_3a" onclick="yesnoCheck();" id="yes3" value="Ya"
										required>
									Ya
								</label>
								<label class="radio-inline">
									<input type="radio" name="form5_3a" onclick="yesnoCheck();" id="no3" value="Tidak"
										checked required>
									Tidak
								</label>
								<label class="radio-inline">
									<input type="radio" name="form5_3a" onclick="yesnoCheck();" id="no3b"
										value="Tidak Tahu" required>
									Tidak Tahu
								</label>
							</div>
							<div id="time3" style="display:none">
								<select name="form5_3b" class="form-control" style="width: 100%;">
									<option value=''>--Waktu Keluhan--</option>
									<option value='Muncul &#8804; 14 hari'>Muncul &#8804; 14 hari</option>
									<option value='Muncul &#8805; 14 hari'>Muncul &#8805; 14 hari</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<label>Nyeri Abdomen</label>
							<div class="form-group">
								<label class="radio-inline">
									<input type="radio" name="form5_4a" onclick="yesnoCheck();" id="yes4" value="Ya"
										required>
									Ya
								</label>
								<label class="radio-inline">
									<input type="radio" name="form5_4a" onclick="yesnoCheck();" id="no4" value="Tidak"
										checked required>
									Tidak
								</label>
								<label class="radio-inline">
									<input type="radio" name="form5_4a" onclick="yesnoCheck();" id="no4b"
										value="Tidak Tahu" required>
									Tidak Tahu
								</label>
							</div>
							<div id="time4" style="display:none">
								<select name="form5_4b" class="form-control" style="width: 100%;">
									<option value=''>--Waktu Keluhan--</option>
									<option value='Muncul &#8804; 14 hari'>Muncul &#8804; 14 hari</option>
									<option value='Muncul &#8805; 14 hari'>Muncul &#8805; 14 hari</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<label>Batuk</label>
							<div class="form-group">
								<label class="radio-inline">
									<input type="radio" name="form5_5a" onclick="yesnoCheck();" id="yes5" value="Ya"
										required>
									Ya
								</label>
								<label class="radio-inline">
									<input type="radio" name="form5_5a" onclick="yesnoCheck();" id="no5" value="Tidak"
										checked required>
									Tidak
								</label>
								<label class="radio-inline">
									<input type="radio" name="form5_5a" onclick="yesnoCheck();" id="no5b"
										value="Tidak Tahu" required>
									Tidak Tahu
								</label>
							</div>
							<div id="time5" style="display:none">
								<select name="form5_5b" class="form-control" style="width: 100%;">
									<option value=''>--Waktu Keluhan--</option>
									<option value='Muncul &#8804; 14 hari'>Muncul &#8804; 14 hari</option>
									<option value='Muncul &#8805; 14 hari'>Muncul &#8805; 14 hari</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<label>Menggigil</label>
							<div class="form-group">
								<label class="radio-inline">
									<input type="radio" name="form5_6a" onclick="yesnoCheck();" id="yes6" value="Ya"
										required>
									Ya
								</label>
								<label class="radio-inline">
									<input type="radio" name="form5_6a" onclick="yesnoCheck();" id="no6" value="Tidak"
										checked required>
									Tidak
								</label>
								<label class="radio-inline">
									<input type="radio" name="form5_6a" onclick="yesnoCheck();" id="no6b"
										value="Tidak Tahu" required>
									Tidak Tahu
								</label>
							</div>
							<div id="time6" style="display:none">
								<select name="form5_6b" class="form-control" style="width: 100%;">
									<option value=''>--Waktu Keluhan--</option>
									<option value='Muncul &#8804; 14 hari'>Muncul &#8804; 14 hari</option>
									<option value='Muncul &#8805; 14 hari'>Muncul &#8805; 14 hari</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<label>Nyeri Otot</label>
							<div class="form-group">
								<label class="radio-inline">
									<input type="radio" name="form5_7a" onclick="yesnoCheck();" id="yes7" value="Ya"
										required>
									Ya
								</label>
								<label class="radio-inline">
									<input type="radio" name="form5_7a" onclick="yesnoCheck();" id="no7" value="Tidak"
										checked required>
									Tidak
								</label>
								<label class="radio-inline">
									<input type="radio" name="form5_7a" onclick="yesnoCheck();" id="no7b"
										value="Tidak Tahu" required>
									Tidak Tahu
								</label>
							</div>
							<div id="time7" style="display:none">
								<select name="form5_7b" class="form-control" style="width: 100%;">
									<option value=''>--Waktu Keluhan--</option>
									<option value='Muncul &#8804; 14 hari'>Muncul &#8804; 14 hari</option>
									<option value='Muncul &#8805; 14 hari'>Muncul &#8805; 14 hari</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<label>Diare</label>
							<div class="form-group">
								<label class="radio-inline">
									<input type="radio" name="form5_8a" onclick="yesnoCheck();" id="yes8" value="Ya"
										required>
									Ya
								</label>
								<label class="radio-inline">
									<input type="radio" name="form5_8a" onclick="yesnoCheck();" id="no8" value="Tidak"
										checked required>
									Tidak
								</label>
								<label class="radio-inline">
									<input type="radio" name="form5_8a" onclick="yesnoCheck();" id="no8b"
										value="Tidak Tahu" required>
									Tidak Tahu
								</label>
							</div>
							<div id="time8" style="display:none">
								<select name="form5_8b" class="form-control" style="width: 100%;">
									<option value=''>--Waktu Keluhan--</option>
									<option value='Muncul &#8804; 14 hari'>Muncul &#8804; 14 hari</option>
									<option value='Muncul &#8805; 14 hari'>Muncul &#8805; 14 hari</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<label>Pilek</label>
							<div class="form-group">
								<label class="radio-inline">
									<input type="radio" name="form5_9a" onclick="yesnoCheck();" id="yes9" value="Ya"
										required>
									Ya
								</label>
								<label class="radio-inline">
									<input type="radio" name="form5_9a" onclick="yesnoCheck();" id="no9" value="Tidak"
										checked required>
									Tidak
								</label>
								<label class="radio-inline">
									<input type="radio" name="form5_9a" onclick="yesnoCheck();" id="no9b"
										value="Tidak Tahu" required>
									Tidak Tahu
								</label>
							</div>
							<div id="time9" style="display:none">
								<select name="form5_9b" class="form-control" style="width: 100%;">
									<option value=''>--Waktu Keluhan--</option>
									<option value='Muncul &#8804; 14 hari'>Muncul &#8804; 14 hari</option>
									<option value='Muncul &#8805; 14 hari'>Muncul &#8805; 14 hari</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<label>Sakit Kepala</label>
							<div class="form-group">
								<label class="radio-inline">
									<input type="radio" name="form5_10a" onclick="yesnoCheck();" id="yes10" value="Ya"
										required>
									Ya
								</label>
								<label class="radio-inline">
									<input type="radio" name="form5_10a" onclick="yesnoCheck();" id="no10" value="Tidak"
										checked required>
									Tidak
								</label>
								<label class="radio-inline">
									<input type="radio" name="form5_10a" onclick="yesnoCheck();" id="no10b"
										value="Tidak Tahu" required>
									Tidak Tahu
								</label>
							</div>
							<div id="time10" style="display:none">
								<select name="form5_10b" class="form-control" style="width: 100%;">
									<option value=''>--Waktu Keluhan--</option>
									<option value='Muncul &#8804; 14 hari'>Muncul &#8804; 14 hari</option>
									<option value='Muncul &#8805; 14 hari'>Muncul &#8805; 14 hari</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<label>Mual dan Muntah</label>
							<div class="form-group">
								<label class="radio-inline">
									<input type="radio" name="form5_11a" onclick="yesnoCheck();" id="yes11" value="Ya"
										required>
									Ya
								</label>
								<label class="radio-inline">
									<input type="radio" name="form5_11a" onclick="yesnoCheck();" id="no11" value="Tidak"
										checked required>
									Tidak
								</label>
								<label class="radio-inline">
									<input type="radio" name="form5_11a" onclick="yesnoCheck();" id="no11b"
										value="Tidak Tahu" required>
									Tidak Tahu
								</label>
							</div>
							<div id="time11" style="display:none">
								<select name="form5_11b" class="form-control" style="width: 100%;">
									<option value=''>--Waktu Keluhan--</option>
									<option value='Muncul &#8804; 14 hari'>Muncul &#8804; 14 hari</option>
									<option value='Muncul &#8805; 14 hari'>Muncul &#8805; 14 hari</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<label>Gejala Lain</label>
							<div class="form-group">
								<label class="radio-inline">
									<input type="radio" name="form5_12a" onclick="yesnoCheck();" id="yes12" value="Ya"
										required>
									Ya
								</label>
								<label class="radio-inline">
									<input type="radio" name="form5_12a" onclick="yesnoCheck();" id="no12" value="Tidak"
										checked required>
									Tidak
								</label>
								<label class="radio-inline">
									<input type="radio" name="form5_12a" onclick="yesnoCheck();" id="no12b"
										value="Tidak Tahu" required>
									Tidak Tahu
								</label>
							</div>
							<div id="time12" style="display:none">
								<select name="form5_12b" class="form-control" style="width: 100%;">
									<option value=''>--Waktu Keluhan--</option>
									<option value='Muncul &#8804; 14 hari'>Muncul &#8804; 14 hari</option>
									<option value='Muncul &#8805; 14 hari'>Muncul &#8805; 14 hari</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<label>Sakit Tenggorokan</label>
							<div class="form-group">
								<label class="radio-inline">
									<input type="radio" name="form5_13a" onclick="yesnoCheck();" id="yes13" value="Ya"
										required>
									Ya
								</label>
								<label class="radio-inline">
									<input type="radio" name="form5_13a" onclick="yesnoCheck();" id="no13" value="Tidak"
										checked required>
									Tidak
								</label>
								<label class="radio-inline">
									<input type="radio" name="form5_13a" onclick="yesnoCheck();" id="no13b"
										value="Tidak Tahu" required>
									Tidak Tahu
								</label>
							</div>
							<div id="time13" style="display:none">
								<select name="form5_13b" class="form-control" style="width: 100%;">
									<option value=''>--Waktu Keluhan--</option>
									<option value='Muncul &#8804; 14 hari'>Muncul &#8804; 14 hari</option>
									<option value='Muncul &#8805; 14 hari'>Muncul &#8805; 14 hari</option>
								</select>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary box-solid">
				<div class="box-header">
					<b>Riwayat Penyakit Dahulu</b>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-2">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="form6[]" value="Asma"> Asma
								</label>
							</div>
						</div>
						<div class="col-md-2">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="form6[]" value="Gangguan Imunologi"> Gangguan Imunologi
								</label>
							</div>
						</div>
						<div class="col-md-2">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="form6[]" value="Hipertensi"> Hipertensi
								</label>
							</div>
						</div>
						<div class="col-md-2">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="form6[]" value="Penyakit Ginjal Kronis"> Penyakit
									Ginjal Kronis
								</label>
							</div>
						</div>
						<div class="col-md-2">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="form6[]" value="PPOK"> PPOK
								</label>
							</div>
						</div>
						<div class="col-md-2">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="form6[]" value="Diabetes"> Diabetes
								</label>
							</div>
						</div>
						<div class="col-md-2">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="form6[]" value="Hamil"> Hamil
								</label>
							</div>
						</div>
						<div class="col-md-2">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="form6[]" value="Keganasan"> Keganasan
								</label>
							</div>
						</div>
						<div class="col-md-2">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="form6[]" value="Penyakit Jantung"> Penyakit Jantung
								</label>
							</div>
						</div>
						<div class="col-md-2">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="form6[]" value="Lainnya"> Lainnya
								</label>
							</div>
						</div>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary box-solid">
				<div class="box-header">
					<b>Riwayat Perawatan di RS sebelumnya</b>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-3">
							<label>Apakah Pasien dirawat di Rumah Sakit ?</label>
							<div class="form-group">
								<label class="radio-inline">
									<input type="radio" name="form7_1" onclick="yesnoCheck2();" id="yes14" value="Ya"
										required>
									Ya
								</label>
								<label class="radio-inline">
									<input type="radio" name="form7_1" onclick="yesnoCheck2();" id="no14" value="Tidak"
										checked required>
									Tidak
								</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div id="form7a_hide" style="display:none">
							<div class="col-md-2">
								<div class="form-group">
									<label>Tanggal Masuk RS</label>
									<input type="text" class="form-control datepicker" name="form7_2" value=""
										required>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label>Nama RS</label>
									<input type="text" class="form-control" name="form7_3" value="" required>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label>Dirawat di ICU</label>
									<select name="form7_4" class="form-control" style="width: 100%;" required>
										<option value=''></option>
										<option value='Ya'>Ya</option>
										<option value='Tidak'>Tidak</option>
									</select>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label>Intubasi</label>
									<select name="form7_5" class="form-control" style="width: 100%;">
										<option value=''></option>
										<option value='Ya'>Ya</option>
										<option value='Tidak'>Tidak</option>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Penggunaan oksigenasi membrane ekstraskorporeal ?</label>
									<select name="form7_6" class="form-control" style="width: 100%;">
										<option value=''></option>
										<option value='Ya'>Ya</option>
										<option value='Tidak'>Tidak</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-3">
							<label>Status Pasien Terakhir</label>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="radio" name="form7_7" onclick="yesnoCheck3();" id="yes15"
											value="DIRUJUK KE RS" required>
										DIRUJUK KE RS
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form7_7" onclick="yesnoCheck3();" id="no15"
											value="DALAM PERAWATAN RS" required>
										DALAM PERAWATAN RS
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form7_7" onclick="yesnoCheck3();" id="no15b"
											value="KARANTINA RUMAH" required>
										KARANTINA RUMAH
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form7_7" onclick="yesnoCheck3();" id="no15c"
											value="SEMBUH" required>
										SEMBUH
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form7_7" onclick="yesnoCheck3();" id="no15d"
											value="MENINGGAL" required>
										MENINGGAL
									</label>
								</div>
							</div>
						</div>
						<div class="col-md-9">
							<div id="form7b_hide" style="display:none">
								<div class="form-group">
									<label>Nama RS Rujukan</label>
									<input type="text" class="form-control" name="form7_8" value="" required>
								</div>
							</div>
						</div>
					</div>

					<!-- /.box-body -->
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary box-solid">
				<div class="box-header">
					<b>Pemeriksaan penunjang</b>
				</div>
				<div class="box-body">
					<div class="col-md-3">
						<div class="row">
							<label>Serum</label>
							<div class="form-group">
								<label class="radio-inline">
									<input type="radio" name="form8_1" onclick="yesnoCheck4();" id="yes16" value="Ya"
										required>
									Ya
								</label>
								<label class="radio-inline">
									<input type="radio" name="form8_1" onclick="yesnoCheck4();" id="no16" value="Tidak"
										checked required>
									Tidak
								</label>
							</div>
						</div>
						<div class="row">
							<div id="hide16" style="display:none">
								<div class="form-group">
									<label>Tanggal</label>
									<input type="text" class="form-control datepicker" name="form8_1a" value=""
										 style="width: 90%;">
								</div>
								<div class="form-group">
									<label>Hasil</label>
									<select name="form8_1b" class="form-control" style="width: 90%;">
										<option value=''></option>
										<option value='Positif'>Positif</option>
										<option value='Negatif'>Negatif</option>
										<option value='Dalam Proses'>Dalam Proses</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="row">
							<label>Sputum</label>
							<div class="form-group">
								<label class="radio-inline">
									<input type="radio" name="form8_2" onclick="yesnoCheck4();" id="yes17" value="Ya"
										required>
									Ya
								</label>
								<label class="radio-inline">
									<input type="radio" name="form8_2" onclick="yesnoCheck4();" id="no17" value="Tidak"
										checked required>
									Tidak
								</label>
							</div>
						</div>
						<div class="row">
							<div id="hide17" style="display:none">
								<div class="form-group">
									<label>Tanggal</label>
									<input type="text" class="form-control datepicker" name="form8_2a" value=""
										 style="width: 90%;">
								</div>
								<div class="form-group">
									<label>Hasil</label>
									<select name="form8_2b" class="form-control" style="width: 90%;">
										<option value=''></option>
										<option value='Positif'>Positif</option>
										<option value='Negatif'>Negatif</option>
										<option value='Dalam Proses'>Dalam Proses</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="row">
							<label>Swab nasofaring/orofaring?</label>
							<div class="form-group">
								<label class="radio-inline">
									<input type="radio" name="form8_3" onclick="yesnoCheck4();" id="yes18" value="Ya"
										required>
									Ya
								</label>
								<label class="radio-inline">
									<input type="radio" name="form8_3" onclick="yesnoCheck4();" id="no18" value="Tidak"
										checked required>
									Tidak
								</label>
							</div>
						</div>
						<div class="row">
							<div id="hide18" style="display:none">
								<div class="form-group">
									<label>Tanggal</label>
									<input type="text" class="form-control datepicker" name="form8_3a" value=""
										 style="width: 90%;">
								</div>
								<div class="form-group">
									<label>Hasil</label>
									<select name="form8_3b" class="form-control" style="width: 90%;">
										<option value=''></option>
										<option value='Positif'>Positif</option>
										<option value='Negatif'>Negatif</option>
										<option value='Dalam Proses'>Dalam Proses</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="row">
							<label>RDT</label>
							<div class="form-group">
								<label class="radio-inline">
									<input type="radio" name="form8_4" onclick="yesnoCheck4();" id="yes19" value="Ya"
										required>
									Ya
								</label>
								<label class="radio-inline">
									<input type="radio" name="form8_4" onclick="yesnoCheck4();" id="no19" value="Tidak"
										checked required>
									Tidak
								</label>
							</div>
						</div>
						<div class="row">
							<div id="hide19" style="display:none">
								<div class="form-group">
									<label>Tanggal</label>
									<input type="text" class="form-control datepicker" name="form8_4a" value="">
								</div>
								<div class="form-group">
									<label>Hasil</label>
									<select name="form8_4b" class="form-control" style="width: 90%;">
										<option value=''></option>
										<option value='Positif'>Positif</option>
										<option value='Negatif'>Negatif</option>
										<option value='Dalam Proses'>Dalam Proses</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary box-solid">
				<div class="box-header">
					<b>Diagnosis</b>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-2">
							<label>ARDS (acute respiratory Distress Syndrome)</label>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="radio" name="form9_1" value="Ya" required>
										Ya
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form9_1" value="Tidak" checked required>
										Tidak
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form9_1" value="Tidak Tahu" required>
										Tidak Tahu
									</label>
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<label>Covid 19</label>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="radio" name="form9_2" value="Ya" required>
										Ya
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form9_2" value="Tidak" checked required>
										Tidak
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form9_2" value="Tidak Tahu" required>
										Tidak Tahu
									</label>
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<label>Pneumonia</label>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="radio" name="form9_3" value="Ya" required>
										Ya
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form9_3" value="Tidak" checked required>
										Tidak
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form9_3" value="Tidak Tahu" required>
										Tidak Tahu
									</label>
								</div>
							</div>
						</div>
                        <div class="col-md-6">
							<div class="form-group">
                                <label>Diagnosis Lain</label>
                                <input type="text" class="form-control" name="form9_4" value="" required>
							</div>
						</div>
					</div>
				<!-- /.box-body -->
			    </div>
		    </div>
	    </div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary box-solid">
				<div class="box-header">
					<b>Faktor kontak/paparan</b>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-3">
							<label>Dalam 14 hari sebelum sakit, apakah memiliki riwayat perjalanan?</label>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="radio" name="form10_1" value="Ya" onclick="yesnoCheck5();" id="yes20" required>
										Ya
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form10_1" value="Tidak"  onclick="yesnoCheck5();" id="no20" checked required>
										Tidak
									</label>
								</div>
							</div>
							<div id="hide20" style="display:none">
								<div class="form-group">
									<label>Negara</label>
									<input type="text" class="form-control" name="form10_2" value="">
								</div>
								<div class="form-group">
									<label>Kota</label>
									<input type="text" class="form-control" name="form10_3" value="">
								</div>
								<div class="form-group">
									<label>Tanggal Mulai Perjalanan</label>
									<input type="text" class="form-control datepicker" name="form10_4" value="">
								</div>
								<div class="form-group">
									<label>Tanggal Tiba Di Indonesia</label>
									<input type="text" class="form-control datepicker" name="form10_5" value="">
								</div>
							</div>

						</div>
						<div class="col-md-3">
							<label>Dalam 14 hari sebelum sakit, apakah memiliki kontak erat dengan kasus suspek COVID-19?</label>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="radio" name="form10_6" value="Ya" required>
										Ya
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form10_6" value="Tidak" checked required>
										Tidak
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form10_6" value="Tidak Tahu" required>
										Tidak Tahu
									</label>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<label>Dalam 14 hari sebelum sakit, apakah memiliki kontak erat kasus konfirmasi COVID-19?</label>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="radio" name="form10_7" value="Ya" required>
										Ya
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form10_7" value="Tidak" checked required>
										Tidak
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form10_7" value="Tidak Tahu" required>
										Tidak Tahu
									</label>
								</div>
							</div>
						</div>
                        <div class="col-md-3">
							<label>Dalam 14 hari sebelum sakit, mengunjungi pasar hewan?</label>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="radio" name="form10_8" value="Ya" onclick="yesnoCheck5();" id="yes21" required>
										Ya
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form10_8" value="Tidak"  onclick="yesnoCheck5();" id="no21" checked required>
										Tidak
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form10_8" value="Tidak Tahu"  onclick="yesnoCheck5();" id="no21b" required>
										Tidak Tahu
									</label>
								</div>
							</div>
							<div id="hide21" style="display:none">
								<div class="form-group">
									<label>Lokasi / Nama Tempat</label>
									<input type="text" class="form-control" name="form10_9" value="">
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<label>Dalam 14 hari sebelum sakit, mengunjungi tempat publik? (gereja, masjid, konser, tempat wisata)</label>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="radio" name="form10_10" value="Ya" onclick="yesnoCheck5();" id="yes22" required>
										Ya
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form10_10" value="Tidak"  onclick="yesnoCheck5();" id="no22" checked required>
										Tidak
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form10_10" value="Tidak Tahu"  onclick="yesnoCheck5();" id="no22b" required>
										Tidak Tahu
									</label>
								</div>
							</div>
							<div id="hide22" style="display:none">
								<div class="form-group">
									<label>Lokasi / Nama Tempat</label>
									<input type="text" class="form-control" name="form10_11" value="">
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<label>Dalam 14 hari sebelum sakit,apakah memiliki riwayat berkunjung ke fasilitas kesehatan (Sebagai pasien, pekerja atau pengunjung)?</label>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="radio" name="form10_12" value="Ya" required>
										Ya
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form10_12" value="Tidak" checked required>
										Tidak
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form10_12" value="Tidak Tahu" required>
										Tidak Tahu
									</label>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<label>Apakah pasien termasuk kelompok ISPA berat (pneumonia hingga membutuhkan perawatan di RS) yang tidak diketahui penyebabnya</label>
							<div class="form-group">
								<div class="radio">
									<label>
										<input type="radio" name="form10_13" value="Ya" required>
										Ya
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form10_13" value="Tidak" checked required>
										Tidak
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="form10_13" value="Tidak Tahu" required>
										Tidak Tahu
									</label>
								</div>
							</div>
						</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-3">
								<label>Merupakan Petugas Kesehatan</label>
								<div class="form-group">
									<div class="radio">
										<label>
											<input type="radio" name="form10_14" value="Ya" onclick="yesnoCheck5();" id="yes23" required>
											Ya
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="form10_14" value="Tidak"  onclick="yesnoCheck5();" id="no23" checked required>
											Tidak
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="form10_14" value="Tidak Tahu"  onclick="yesnoCheck5();" id="no23b" required>
											Tidak Tahu
										</label>
									</div>
								</div>
								<div id="hide23" style="display:none">
									<div class="form-group">
										<label>Petugas Kesehatan</label>
										<select name="form10_15" class="form-control">
											<option value="">-- Pilih Tenaga Kesehatan --</option>
											<option value="Dokter">Dokter</option>
											<option value="Perawat">Perawat</option>
											<option value="Farmasi">Farmasi</option>
											<option value="Dokter Spesialis Paru">Dokter Spesialis Paru</option>
											<option value="Dokter Spesialis Lain">Dokter Spesialis Lain</option>
											<option value="Bidan">Bidan</option>
											<option value="Ahli Gizi">Ahli Gizi</option>
											<option value="Tenaga Kesehatan Masyarakat">Tenaga Kesehatan Masyarakat</option>
											<option value="Lainnya">Lainnya</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-6">
								<label>Alat perlindungan diri yang digunakan?</label>
							</div>
						</div>
						<div class="row">
							<div class="col-md-1">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="form10_16[]" value="Gown"> Gown
									</label>
								</div>
							</div>
							<div class="col-md-2">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="form10_16[]" value="Masker Bedah"> Masker Bedah
									</label>
								</div>
							</div>
							<div class="col-md-2">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="form10_16[]" value="Sarung Tangan"> Sarung Tangan
									</label>
								</div>
							</div>
							<div class="col-md-2">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="form10_16[]" value="Masker N95 standard FFP2"> Masker N95 standard FFP2
									</label>
								</div>
							</div>
							<div class="col-md-1">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="form10_16[]" value="FFP3"> FFP3
									</label>
								</div>
							</div>
							<div class="col-md-2">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="form10_16[]" value="Kacamata Pelindung Goggle"> Kacamata Pelindung Goggle
									</label>
								</div>
							</div>
							<div class="col-md-2">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="form10_16[]" value="Tidak Sama Sekali"> Tidak Sama Sekali
									</label>
								</div>
							</div>
						</div>
				<!-- /.box-body -->
			    </div>
		    </div>
	    </div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary box-solid">
				<div class="box-header">
					<b>Daftar Kontak Pasien (dengan orang-orang dekat)</b>
				</div>
				<div class="box-body">
					<table class="table table-bordered table-hover" id="empData">
					</table>
					<br>
					<button type="button" class="btn btn-warning btn-md" onclick="addNewRow()"><span class="fa fa-plus"></span> Tambah Kontak Kasus Lain</button>
				</div>
			</div>
		</div>
	</div>
	<div class="box-footer">
		<button type="submit" class="btn btn-primary">Tambah</button>
	</div>
	</form>
</section>


<?php $this->load->view('pasien/v_pasien_js') ?>