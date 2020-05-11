<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Tambah Pasien
    </h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary box-solid">
                <div class="box-header">
                    <b>Petugas medis/Paramedis/Relawan kesehatan</b>
                </div>
                <!-- form start -->
                <form action="<?php echo $action ?>" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tipe Fasyankes</label>
                                    <input type="text" class="form-control" name="form11" value="" requiredss>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Kode Fasyankes</label>
                                    <input type="text" class="form-control" name="form12" value="" requiredss>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nama Fasilitas Pelayanan Kesehatan</label>
                                    <input type="text" class="form-control" name="form13" value="" requiredss>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Provinsi Fasyankes</label>
                                    <select class="form-control select2" id="provinsi" style="width: 100%;" name="form14">
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
                                    <select class="form-control select2" id="kabupaten-kota" style="width: 100%;" name="form15">
                                        <option value='0'>--pilih--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Kecamatan Fasyankes</label>
                                    <select class="form-control select2" id="kecamatan" style="width: 100%;" name="form16">
                                        <option value='0'>--pilih--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Kelurahan Fasyankes</label>
                                    <select class="form-control select2" id="kelurahan-desa" style="width: 100%;" name="form17">
                                        <option value='0'>--pilih--</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <hr>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nama Pewawancara</label>
                                    <input type="text" class="form-control" name="form18" value="" requiredss>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>No Hp Pewawancara</label>
                                    <input type="number" class="form-control" name="form19" value="" requiredss>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tanggal Wawancara</label>
                                    <input type="text" class="form-control datepicker" name="form110" value="" requiredss>
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
                                    <input type="text" class="form-control" name="form2_1" value="" requiredss>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>No HP</label>
                                    <input type="number" class="form-control" name="form2_2" value="" requiredss>
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
                                    <input type="text" class="form-control" name="form2_6" value="" requiredss>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="text" class="form-control datepicker" name="form2_7" value="" requiredss>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Usia</label>
                                    <input type="number" class="form-control" name="form2_8" value="" requiredss>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>NIK</label>
                                    <input type="text" class="form-control" name="form2_9" value="" requiredss>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Provinsi</label>
                                    <select class="form-control select2" id="provinsi2" style="width: 100%;" name="form2_10" requiredss>
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
                                    <select class="form-control select2" id="kabupaten-kota2" style="width: 100%;" name="form2_11" requiredss>
                                        <option value='0'>--pilih--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Kecamatan</label>
                                    <select class="form-control select2" id="kecamatan2" style="width: 100%;" name="form2_12" requiredss>
                                        <option value='0'>--pilih--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Kelurahan</label>
                                    <select class="form-control select2" id="kelurahan-desa2" style="width: 100%;" name="form2_13" requiredss>
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
                                    <input type="text" class="form-control" name="form2_17" value="" requiredss>
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
                                        <input type="radio" name="form3_1" value="Sedenter" requiredss>
                                        Sedenter
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="form3_1" value="Latihan fisik < 150 menit/minggu (3 x 50 menit/minggu atau 5 x 30 menit/minggu)" requiredss>
                                        Latihan fisik < 150 menit/minggu (3 x 50 menit/minggu atau 5 x 30 menit/minggu) 
                                    </label> 
                                </div> 
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="form3_1" value="Latihan fisik ≥ 150 menit/minggu (3 x 50 menit/minggu atau 5 x 30 menit/minggu)" requiredss>
                                        Latihan fisik ≥ 150 menit/minggu (3 x 50 menit/minggu atau 5 x 30 menit/minggu)
                                    </label>
                                </div>
                            </div>
                            <br>
                            <label>Keanggotaan BPJS</label>
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="form3_2" value="Ya" requiredss>
                                        Ya
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="form3_2" value="Tidak" requiredss>
                                        Tidak
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="form3_2" value="Tidak Tahu" requiredss>
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
                                        <input type="radio" name="form3_3" value="Ya" requiredss>
                                        Ya
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="form3_3" value="Tidak" requiredss>
                                        Tidak
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="form3_3" value="Tidak Tahu" requiredss>
                                        Tidak Tahu
                                    </label>
                                </div>
                            </div>
                            <br>
                            <label>Konsumsi Minuman Beralkohol</label>
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="form3_4" value="Ya" requiredss>
                                        Ya
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="form3_4" value="Tidak" requiredss>
                                        Tidak
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="form3_4" value="Tidak Tahu" requiredss>
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
                                        < 1 Juta 
                                    </label> 
                                </div> 
                                <div class="radio">
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
                                    <input type="radio" name="form5_1a" onclick="yesnoCheck();" id="yes1" value="Ya" requiredss>
                                    Ya
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="form5_1a" onclick="yesnoCheck();" id="no1" value="Tidak" checked requiredss>
                                    Tidak
                                </label> 
                                <label class="radio-inline">
                                    <input type="radio" name="form5_1a" onclick="yesnoCheck();" id="no1" value="Tidak Tahu" requiredss>
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
                                    <input type="radio" name="form5_2a" onclick="yesnoCheck();" id="yes2" value="Ya" requiredss>
                                    Ya
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="form5_2a" onclick="yesnoCheck();" id="no2" value="Tidak" checked requiredss>
                                    Tidak
                                </label> 
                                <label class="radio-inline">
                                    <input type="radio" name="form5_2a" onclick="yesnoCheck();" id="no2" value="Tidak Tahu" requiredss>
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
                                    <input type="radio" name="form5_3a" onclick="yesnoCheck();" id="yes3" value="Ya" requiredss>
                                    Ya
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="form5_3a" onclick="yesnoCheck();" id="no3" value="Tidak" checked requiredss>
                                    Tidak
                                </label> 
                                <label class="radio-inline">
                                    <input type="radio" name="form5_3a" onclick="yesnoCheck();" id="no3" value="Tidak Tahu" requiredss>
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
                                    <input type="radio" name="form5_4a" onclick="yesnoCheck();" id="yes4" value="Ya" requiredss>
                                    Ya
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="form5_4a" onclick="yesnoCheck();" id="no4" value="Tidak" checked requiredss>
                                    Tidak
                                </label> 
                                <label class="radio-inline">
                                    <input type="radio" name="form5_4a" onclick="yesnoCheck();" id="no4" value="Tidak Tahu" requiredss>
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
                                    <input type="radio" name="form5_5a" onclick="yesnoCheck();" id="yes5" value="Ya" requiredss>
                                    Ya
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="form5_5a" onclick="yesnoCheck();" id="no5" value="Tidak" checked requiredss>
                                    Tidak
                                </label> 
                                <label class="radio-inline">
                                    <input type="radio" name="form5_5a" onclick="yesnoCheck();" id="no5" value="Tidak Tahu" requiredss>
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
                                    <input type="radio" name="form5_6a" onclick="yesnoCheck();" id="yes6" value="Ya" requiredss>
                                    Ya
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="form5_6a" onclick="yesnoCheck();" id="no6" value="Tidak" checked requiredss>
                                    Tidak
                                </label> 
                                <label class="radio-inline">
                                    <input type="radio" name="form5_6a" onclick="yesnoCheck();" id="no6" value="Tidak Tahu" requiredss>
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
                                    <input type="radio" name="form5_7a" onclick="yesnoCheck();" id="yes7" value="Ya" requiredss>
                                    Ya
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="form5_7a" onclick="yesnoCheck();" id="no7" value="Tidak" checked requiredss>
                                    Tidak
                                </label> 
                                <label class="radio-inline">
                                    <input type="radio" name="form5_7a" onclick="yesnoCheck();" id="no7" value="Tidak Tahu" requiredss>
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
                                    <input type="radio" name="form5_8a" onclick="yesnoCheck();" id="yes8" value="Ya" requiredss>
                                    Ya
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="form5_8a" onclick="yesnoCheck();" id="no8" value="Tidak" checked requiredss>
                                    Tidak
                                </label> 
                                <label class="radio-inline">
                                    <input type="radio" name="form5_8a" onclick="yesnoCheck();" id="no8" value="Tidak Tahu" requiredss>
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
                                    <input type="radio" name="form5_9a" onclick="yesnoCheck();" id="yes9" value="Ya" requiredss>
                                    Ya
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="form5_9a" onclick="yesnoCheck();" id="no9" value="Tidak" checked requiredss>
                                    Tidak
                                </label> 
                                <label class="radio-inline">
                                    <input type="radio" name="form5_9a" onclick="yesnoCheck();" id="no9" value="Tidak Tahu" requiredss>
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
                                    <input type="radio" name="form5_10a" onclick="yesnoCheck();" id="yes10" value="Ya" requiredss>
                                    Ya
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="form5_10a" onclick="yesnoCheck();" id="no10" value="Tidak" checked requiredss>
                                    Tidak
                                </label> 
                                <label class="radio-inline">
                                    <input type="radio" name="form5_10a" onclick="yesnoCheck();" id="no10" value="Tidak Tahu" requiredss>
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
                                    <input type="radio" name="form5_11a" onclick="yesnoCheck();" id="yes11" value="Ya" requiredss>
                                    Ya
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="form5_11a" onclick="yesnoCheck();" id="no11" value="Tidak" checked requiredss>
                                    Tidak
                                </label> 
                                <label class="radio-inline">
                                    <input type="radio" name="form5_11a" onclick="yesnoCheck();" id="no11" value="Tidak Tahu" requiredss>
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
                                    <input type="radio" name="form5_12a" onclick="yesnoCheck();" id="yes12" value="Ya" requiredss>
                                    Ya
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="form5_12a" onclick="yesnoCheck();" id="no12" value="Tidak" checked requiredss>
                                    Tidak
                                </label> 
                                <label class="radio-inline">
                                    <input type="radio" name="form5_12a" onclick="yesnoCheck();" id="no12" value="Tidak Tahu" requiredss>
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
                                    <input type="radio" name="form5_13a" onclick="yesnoCheck();" id="yes13" value="Ya" requiredss>
                                    Ya
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="form5_13a" onclick="yesnoCheck();" id="no13" value="Tidak" checked requiredss>
                                    Tidak
                                </label> 
                                <label class="radio-inline">
                                    <input type="radio" name="form5_13a" onclick="yesnoCheck();" id="no13" value="Tidak Tahu" requiredss>
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
                                    <input type="checkbox" name="form6[]" value="Penyakit Ginjal Kronis"> Penyakit Ginjal Kronis
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
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Tambah</button>
    </div>
    </form>
</section>


                <!-- <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form> -->
<?php $this->load->view('pasien/v_pasien_js') ?>