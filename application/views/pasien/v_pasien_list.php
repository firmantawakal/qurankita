<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Pasien
  </h1>
</section>

<section class="content">
  <div id="message">
    <?php //echo @$this->session->userdata('message') <> '' ? @$this->session->userdata('message') : ''; ?>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <a href="<?php echo site_url('pasien/create') ?>" class="btn btn-flat btn-primary">Add New </a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th style="width: 10px;">No</th>
                <th>Aksi</th>
                <th>Tgl Wawancara</th>
                <th>Fasyankes</th>
                <th>Identitas Pasien</th>
                <th>Alamat Pasien</th>
                <th>Kategori</th>
                <th>Created At</th>
              </tr>
            </thead>
            <tbody>
            <?php
				      $no=1;
                foreach($pasien as $data){
            ?>
              <tr>
                  <td><?php echo $no++ ?></td>
                  <td class="text-center">
                      <span data-toggle="tooltip" title="Detail"><a href="#detail<?php echo $data->id_pasien; ?>" data-toggle="modal" class="btn btn-xs btn-success"><i class="fa fa-bank"></i></a></span>

                      <!-- <a href="<?php //echo site_url('insentif/update/'.$data->id_insentif) ?>" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                      <span data-toggle="tooltip" title="Delete"><a href="#modal-fade<?php //ho $data->id_insentif; ?>" data-toggle="modal" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a></span> -->
                  </td>
                  <td><?php echo $data->f1_v10 ?></td>
                  <td><?php echo $data->f1_v3 ?></td>
                  <td><?php echo $data->f2_v1 ?></td>
                  <td><?php echo $data->f2_v17.', '.$data->kel_p.', '.$data->kec_p.', '.$data->kab_p.', '.$data->prov_p ?></td>
                  <td><?php echo $data->f2_v18 ?></td>
                  <td><?php echo $data->created_at ?></td>
              </tr>
              <?php 
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
    foreach($pasien as $data){
?>
<div class="modal fade" id="detail<?php echo $data->id_pasien; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Detail</h4>
      </div>
      <div class="modal-body">
        <div class="box-group" id="accordion">
          <div class="panel box box-primary">

            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    Petugas medis/Paramedis/Relawan kesehatan
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
              <div class="box-body">
                <table class="table table-hover table-vcenter table-striped">
                  <tr><td><?php echo $label[0]->label_name ?></td><td>:</td><td><?php echo $data->f1_v1 ?></td></tr>
                  <tr><td><?php echo $label[1]->label_name ?></td><td>:</td><td><?php echo $data->f1_v2 ?></td></tr>
                  <tr><td><?php echo $label[2]->label_name ?></td><td>:</td><td><?php echo $data->f1_v3 ?></td></tr>
                  <tr><td><?php echo $label[3]->label_name ?></td><td>:</td><td><?php echo $data->prov_fy ?></td></tr>
                  <tr><td><?php echo $label[4]->label_name ?></td><td>:</td><td><?php echo $data->kab_fy ?></td></tr>
                  <tr><td><?php echo $label[5]->label_name ?></td><td>:</td><td><?php echo $data->kec_fy ?></td></tr>
                  <tr><td><?php echo $label[6]->label_name ?></td><td>:</td><td><?php echo $data->kel_fy ?></td></tr>
                  <tr><td><?php echo $label[7]->label_name ?></td><td>:</td><td><?php echo $data->f1_v8 ?></td></tr>
                  <tr><td><?php echo $label[8]->label_name ?></td><td>:</td><td><?php echo $data->f1_v9 ?></td></tr>
                  <tr><td><?php echo $label[9]->label_name ?></td><td>:</td><td><?php echo $data->f1_v10 ?></td></tr>
                </table>
              </div>
            </div>

            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    Identitas Pasien
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="box-body">
                <table class="table table-hover table-vcenter table-striped">
                  <tr><td><?php echo $label[10]->label_name ?></td><td>:</td><td><?php echo $data->f2_v1 ?></td></tr>
                  <tr><td><?php echo $label[11]->label_name ?></td><td>:</td><td><?php echo $data->f2_v2 ?></td></tr>
                  <tr><td><?php echo $label[12]->label_name ?></td><td>:</td><td><?php echo $data->f2_v3 ?></td></tr>
                  <tr><td><?php echo $label[13]->label_name ?></td><td>:</td><td><?php echo $data->f2_v4 ?></td></tr>
                  <tr><td><?php echo $label[14]->label_name ?></td><td>:</td><td><?php echo $data->f2_v5 ?></td></tr>
                  <tr><td><?php echo $label[15]->label_name ?></td><td>:</td><td><?php echo $data->f2_v6 ?></td></tr>
                  <tr><td><?php echo $label[16]->label_name ?></td><td>:</td><td><?php echo $data->f2_v7 ?></td></tr>
                  <tr><td><?php echo $label[17]->label_name ?></td><td>:</td><td><?php echo $data->f2_v8 ?></td></tr>
                  <tr><td><?php echo $label[18]->label_name ?></td><td>:</td><td><?php echo $data->prov_p ?></td></tr>
                  <tr><td><?php echo $label[19]->label_name ?></td><td>:</td><td><?php echo $data->kab_p ?></td></tr>
                  <tr><td><?php echo $label[20]->label_name ?></td><td>:</td><td><?php echo $data->kec_p ?></td></tr>
                  <tr><td><?php echo $label[21]->label_name ?></td><td>:</td><td><?php echo $data->kel_p ?></td></tr>
                  <tr><td><?php echo $label[22]->label_name ?></td><td>:</td><td><?php echo $data->f2_v13 ?></td></tr>
                  <tr><td><?php echo $label[23]->label_name ?></td><td>:</td><td><?php echo $data->f2_v14 ?></td></tr>
                  <tr><td><?php echo $label[24]->label_name ?></td><td>:</td><td><?php echo $data->f2_v15 ?></td></tr>
                  <tr><td><?php echo $label[25]->label_name ?></td><td>:</td><td><?php echo $data->f2_v16 ?></td></tr>
                  <tr><td><?php echo $label[26]->label_name ?></td><td>:</td><td><?php echo $data->f2_v17 ?></td></tr>
                  <tr><td><?php echo $label[27]->label_name ?></td><td>:</td><td><?php echo $data->f2_v18 ?></td></tr>
                </table>
              </div>
            </div>
            
            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                    Riwayat Sosial – Ekonomi
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
              <div class="box-body">
                <table class="table table-hover table-vcenter table-striped">
                  <tr><td><?php echo $label[28]->label_name ?></td><td>:</td><td><?php echo $data->f3_v1 ?></td></tr>
                  <tr><td><?php echo $label[29]->label_name ?></td><td>:</td><td><?php echo $data->f3_v2 ?></td></tr>
                  <tr><td><?php echo $label[30]->label_name ?></td><td>:</td><td><?php echo $data->f3_v3 ?></td></tr>
                  <tr><td><?php echo $label[31]->label_name ?></td><td>:</td><td><?php echo $data->f3_v4 ?></td></tr>
                  <tr><td><?php echo $label[32]->label_name ?></td><td>:</td><td><?php echo $data->f3_v5 ?></td></tr>
                  <tr><td><?php echo $label[33]->label_name ?></td><td>:</td><td><?php echo $data->f3_v6 ?></td></tr>
                </table>
              </div>
            </div>

            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                    Pemeriksaan Fisik
                </a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
              <div class="box-body">
                <table class="table table-hover table-vcenter table-striped">
                  <tr><td><?php echo $label[34]->label_name ?></td><td>:</td><td><?php echo $data->f4_v1 ?> &#176;C</td></tr>
                  <tr><td><?php echo $label[35]->label_name ?></td><td>:</td><td><?php echo $data->f4_v2 ?> mmHg</td></tr>
                  <tr><td><?php echo $label[36]->label_name ?></td><td>:</td><td><?php echo $data->f4_v3 ?> x/menit</td></tr>
                  <tr><td><?php echo $label[37]->label_name ?></td><td>:</td><td><?php echo $data->f4_v4 ?> x/menit</td></tr>
                  <tr><td><?php echo $label[38]->label_name ?></td><td>:</td><td><?php echo $data->f4_v5 ?> cm</td></tr>
                  <tr><td><?php echo $label[39]->label_name ?></td><td>:</td><td><?php echo $data->f4_v6 ?> kg</td></tr>
                  <tr><td><?php echo $label[40]->label_name ?></td><td>:</td><td><?php echo $data->f4_v7 ?></td></tr>
                </table>
              </div>
            </div>

            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                    Informasi Klinis
                </a>
              </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
              <div class="box-body">
                <table class="table table-hover table-vcenter table-striped">
                  <tr><td><?php echo $label[41]->label_name ?></td><td>:</td><td><?php echo $data->f5_v1a; if($data->f5_v1a=='Ya'){echo ' ('.$data->f5_v1b.')';} ?></td></tr>
                  <tr><td><?php echo $label[42]->label_name ?></td><td>:</td><td><?php echo $data->f5_v2a; if($data->f5_v2a=='Ya'){echo ' ('.$data->f5_v2b.')';} ?> </td></tr>
                  <tr><td><?php echo $label[43]->label_name ?></td><td>:</td><td><?php echo $data->f5_v3a; if($data->f5_v3a=='Ya'){echo ' ('.$data->f5_v3b.')';} ?> </td></tr>
                  <tr><td><?php echo $label[44]->label_name ?></td><td>:</td><td><?php echo $data->f5_v4a; if($data->f5_v4a=='Ya'){echo ' ('.$data->f5_v4b.')';} ?> </td></tr>
                  <tr><td><?php echo $label[45]->label_name ?></td><td>:</td><td><?php echo $data->f5_v5a; if($data->f5_v5a=='Ya'){echo ' ('.$data->f5_v5b.')';} ?> </td></tr>
                  <tr><td><?php echo $label[46]->label_name ?></td><td>:</td><td><?php echo $data->f5_v6a; if($data->f5_v6a=='Ya'){echo ' ('.$data->f5_v6b.')';} ?> </td></tr>
                  <tr><td><?php echo $label[47]->label_name ?></td><td>:</td><td><?php echo $data->f5_v7a; if($data->f5_v7a=='Ya'){echo ' ('.$data->f5_v7b.')';} ?></td></tr>
                  <tr><td><?php echo $label[48]->label_name ?></td><td>:</td><td><?php echo $data->f5_v8a; if($data->f5_v8a=='Ya'){echo ' ('.$data->f5_v8b.')';} ?></td></tr>
                  <tr><td><?php echo $label[49]->label_name ?></td><td>:</td><td><?php echo $data->f5_v9a; if($data->f5_v9a=='Ya'){echo ' ('.$data->f5_v9b.')';} ?></td></tr>
                  <tr><td><?php echo $label[50]->label_name ?></td><td>:</td><td><?php echo $data->f5_v10a; if($data->f5_v10a=='Ya'){echo ' ('.$data->f5_v10b.')';} ?></td></tr>
                  <tr><td><?php echo $label[51]->label_name ?></td><td>:</td><td><?php echo $data->f5_v11a; if($data->f5_v11a=='Ya'){echo ' ('.$data->f5_v11b.')';} ?></td></tr>
                  <tr><td><?php echo $label[52]->label_name ?></td><td>:</td><td><?php echo $data->f5_v12a; if($data->f5_v12a=='Ya'){echo ' ('.$data->f5_v12b.')';} ?></td></tr>
                  <tr><td><?php echo $label[53]->label_name ?></td><td>:</td><td><?php echo $data->f5_v13a; if($data->f5_v13a=='Ya'){echo ' ('.$data->f5_v13b.')';} ?></td></tr>
                </table>
              </div>
            </div>

            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                  Riwayat Penyakit Dahulu
                </a>
              </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse">
              <div class="box-body">
                <table class="table table-hover table-vcenter table-striped">
                  <tr><td><?php echo $label[54]->label_name ?></td><td>:</td><td><?php echo $data->f6; ?></td></tr>
                </table>
              </div>
            </div>

            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                Riwayat Perawatan di RS sebelumnya
                </a>
              </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse">
              <div class="box-body">
                <table class="table table-hover table-vcenter table-striped">
                  <tr><td><?php echo $label[55]->label_name ?></td><td>:</td><td><?php echo $data->f7_v1; 
                            if($data->f7_v1=='Ya'){ ?>
                            <br>
                            <table>
                              <tr><td><?php echo $label[56]->label_name ?></td><td>:</td><td style="min-width:80px"><?php echo $data->f7_v2; ?></td></tr>
                              <tr><td><?php echo $label[57]->label_name ?></td><td>:</td><td><?php echo $data->f7_v3; ?></td></tr>
                              <tr><td><?php echo $label[58]->label_name ?></td><td>:</td><td><?php echo $data->f7_v4; ?></td></tr>
                              <tr><td><?php echo $label[59]->label_name ?></td><td>:</td><td><?php echo $data->f7_v5; ?></td></tr>
                              <tr><td><?php echo $label[60]->label_name ?></td><td>:</td><td><?php echo $data->f7_v6; ?></td></tr>
                              
                            </table>
                            <?php } ?>
                        </td></tr>
                  <tr><td><?php echo $label[61]->label_name ?></td><td>:</td><td><?php echo $data->f7_v7; if($data->f7_v7=='DIRUJUK KE RS'){echo ' ('.$data->f7_v8.')';} ?></td></tr>
                </table>
              </div>
            </div>

            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
                Pemeriksaan penunjang
                </a>
              </h4>
            </div>
            <div id="collapseEight" class="panel-collapse collapse">
              <div class="box-body">
                <table class="table table-hover table-vcenter table-striped">
                  <tr><td><?php echo $label[62]->label_name ?></td><td>:</td><td><?php echo $data->f8_v1; 
                        if($data->f8_v1=='Ya'){ ?>
                        <br>
                        <table>
                          <tr><td style="padding-right:5px">Tanggal</td><td style="padding-right:5px">:</td><td><?php echo $data->f8_v1a; ?></td></tr>
                          <tr><td>Hasil</td><td>:</td><td><?php echo $data->f8_v1b; ?></td></tr>
                        </table>
                        <?php } ?>
                    </td>
                  </tr>
                  <tr><td><?php echo $label[63]->label_name ?></td><td>:</td><td><?php echo $data->f8_v2; 
                        if($data->f8_v2=='Ya'){ ?>
                        <br>
                        <table>
                          <tr><td style="padding-right:5px">Tanggal</td><td style="padding-right:5px">:</td><td><?php echo $data->f8_v2a; ?></td></tr>
                          <tr><td>Hasil</td><td>:</td><td><?php echo $data->f8_v2b; ?></td></tr>
                        </table>
                        <?php } ?>
                    </td>
                  </tr>
                  <tr><td><?php echo $label[64]->label_name ?></td><td>:</td><td><?php echo $data->f8_v3; 
                        if($data->f8_v3=='Ya'){ ?>
                        <br>
                        <table>
                          <tr><td style="padding-right:5px">Tanggal</td><td style="padding-right:5px">:</td><td><?php echo $data->f8_v3a; ?></td></tr>
                          <tr><td>Hasil</td><td>:</td><td><?php echo $data->f8_v3b; ?></td></tr>
                        </table>
                        <?php } ?>
                    </td>
                  </tr>
                  <tr><td><?php echo $label[65]->label_name ?></td><td>:</td><td><?php echo $data->f8_v4; 
                        if($data->f8_v4=='Ya'){ ?>
                        <br>
                        <table>
                          <tr><td style="padding-right:5px">Tanggal</td><td style="padding-right:5px">:</td><td><?php echo $data->f8_v4a; ?></td></tr>
                          <tr><td>Hasil</td><td>:</td><td><?php echo $data->f8_v4b; ?></td></tr>
                        </table>
                        <?php } ?>
                    </td>
                  </tr>
                </table>
              </div>
            </div>

            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine">
                Diagnosis
                </a>
              </h4>
            </div>
            <div id="collapseNine" class="panel-collapse collapse">
              <div class="box-body">
                <table class="table table-hover table-vcenter table-striped">
                  <tr><td><?php echo $label[66]->label_name ?></td><td>:</td><td><?php echo $data->f9_v1; ?></td></tr>
                  <tr><td><?php echo $label[67]->label_name ?></td><td>:</td><td><?php echo $data->f9_v2; ?> </td></tr>
                  <tr><td><?php echo $label[68]->label_name ?></td><td>:</td><td><?php echo $data->f9_v3; ?> </td></tr>
                  <tr><td><?php echo $label[69]->label_name ?></td><td>:</td><td><?php echo $data->f9_v4; ?> </td></tr>
                </table>
              </div>
            </div>

            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTen">
                Faktor kontak/paparan
                </a>
              </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse">
              <div class="box-body">
                <table class="table table-hover table-vcenter table-striped">
                  <tr><td style="width: 200px"><?php echo $label[70]->label_name ?></td><td>:</td><td><?php echo $data->f10_v1; 
                        if($data->f10_v1=='Ya'){ ?>
                        <br>
                        <table>
                          <tr><td style="padding-right:5px"><?php echo $label[71]->label_name ?></td><td style="padding-right:5px">:</td><td><?php echo $data->f10_v2; ?></td></tr>
                          <tr><td><?php echo $label[72]->label_name ?></td><td>:</td><td><?php echo $data->f10_v3; ?></td></tr>
                          <tr><td><?php echo $label[73]->label_name ?></td><td>:</td><td><?php echo $data->f10_v4; ?></td></tr>
                          <tr><td><?php echo $label[74]->label_name ?></td><td>:</td><td><?php echo $data->f10_v5; ?></td></tr>
                        </table>
                        <?php } ?>
                    </td>
                  </tr>
                  <tr><td><?php echo $label[75]->label_name ?></td><td>:</td><td><?php echo $data->f10_v6;?></td></tr>
                  <tr><td><?php echo $label[76]->label_name ?></td><td>:</td><td><?php echo $data->f10_v7; ?></td></tr>
                  <tr><td><?php echo $label[77]->label_name ?></td><td>:</td><td><?php echo $data->f10_v8; 
                        if($data->f10_v8=='Ya'){ ?>
                        <br>
                        <table>
                          <tr><td style="padding-right:5px"><?php echo $label[78]->label_name ?></td><td style="padding-right:5px">:</td><td><?php echo $data->f10_v9; ?></td></tr>
                        </table>
                        <?php } ?>
                    </td>
                  </tr>
                  <tr><td><?php echo $label[79]->label_name ?></td><td>:</td><td><?php echo $data->f10_v10; 
                        if($data->f10_v8=='Ya'){ ?>
                        <br>
                        <table>
                          <tr><td style="padding-right:5px"><?php echo $label[80]->label_name ?></td><td style="padding-right:5px">:</td><td><?php echo $data->f10_v11; ?></td></tr>
                        </table>
                        <?php } ?>
                    </td>
                  </tr>
                  <tr><td><?php echo $label[81]->label_name ?></td><td>:</td><td><?php echo $data->f10_v12; ?></td></tr>
                  <tr><td><?php echo $label[82]->label_name ?></td><td>:</td><td><?php echo $data->f10_v13; ?></td></tr>
                  <tr><td><?php echo $label[83]->label_name ?></td><td>:</td><td><?php echo $data->f10_v14; if($data->f10_v14=='Ya'){echo ' ('.$data->f10_v15.')';} ?></td></tr>
                  <tr><td><?php echo $label[84]->label_name ?></td><td>:</td><td><?php echo $data->f10_v16; ?></td></tr>
                </table>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<?php 
}
?>