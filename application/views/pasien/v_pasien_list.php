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
                  <td><?php echo $data->f2_v16.', '.$data->kel_p.', '.$data->kec_p.', '.$data->kab_p.', '.$data->prov_p ?></td>
                  <td><?php echo $data->f2_v17 ?></td>
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
        <h4 class="modal-title">Detail Pasien</h4>
      </div>
      <div class="modal-body">
        <table class="table table-hover table-vcenter table-striped">
          <?php foreach($form1 as $f1){  ?>
          <tr>
              <td><?php echo $f1[0]->label_name ?></td>
              <td>:</td>
              <td><?php echo $data->f1_v1 ?></td>
          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<?php 
}
?>