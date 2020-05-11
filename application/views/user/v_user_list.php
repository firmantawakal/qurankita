<div id="page-content">
   <!-- user harian -->
   <div class="block">
        <!-- Responsive Full Title -->
        <div class="block-title">
            <h2><strong>Data User</strong> </h2>
        </div>
         <!-- Success Alert -->
         <div id="message">
            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
        </div>
        <!-- END Responsive Full Title -->
        <div class="table-responsive">
        <a href="<?php echo site_url('user/create') ?>" class="btn btn-sm btn-primary">Tambah User</a>
        <br><br>
            <table id="example-datatable2" class="table table-hover table-vcenter table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th style="width: 10px;">No</th>
                        <th>Username</th>
                        <th>Nama User</th>
                </thead>
                <tbody>
                <?php
				    $no=1;
                    foreach($user as $data){
                ?>
                    <tr>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="<?php echo site_url('user/update/'.$data->username) ?>" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <!-- <span data-toggle="tooltip" title="Delete"><a href="#modal-fade<?php //echo $data->username; ?>" data-toggle="modal" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a></span> -->
                            </div>
                        </td>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data->username ?></td>
                        <td><?php echo $data->nama_user ?></td>
                    </tr>
                    <div id="modal-fade<?php echo $data->username; ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h3 class="modal-title"><strong>Konfirmasi</strong></h3>
                                  </div>
                                  <div class="modal-body">
                                      Anda yakin ingin menghapus data?
                                  </div>
                                  <div class="modal-footer">
                                      <a href="<?php echo site_url('user/delete/'.$data->username) ?>" class="btn btn-effect-ripple btn-danger">Ya</a>
                                      <button type="button" class="btn btn-effect-ripple btn-default" data-dismiss="modal">Tidak</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>
        
        <br>
    </div>
</div>