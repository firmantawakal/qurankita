<div id="page-content">
   <!-- Responsive Full Block -->
   <div class="block">
        <!-- Responsive Full Title -->
        <div class="block-title">
            <h2><?php echo $title ?></h2>
        </div>
        <!-- Alert -->
        <div style="margin: 15px"  id="message">
            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
        </div>
        <!-- Basic Form Elements Content -->
        <form action="<?php echo $action ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
            <input type="hidden" name="f_username_hid" value="<?php echo $username_hid ?>" class="form-control">
           
            <div class="form-group">
                <label class="col-md-3 control-label" >Username</label>
                <div class="col-md-9">
                    <input type="text" name="f_username" class="form-control" value="<?php echo $username ?>" placeholder="Username">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" >Nama User</label>
                <div class="col-md-9">
                    <input type="text" name="f_nama_user" class="form-control" value="<?php echo $nama_user ?>" placeholder="Nama User">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" >Password</label>
                <div class="col-md-9">
                    <input type="password" name="f_password" class="form-control" placeholder="Password">
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-md-9 col-md-offset-3">
                    <a type="button" href="javascript:history.go(-1)" class="btn btn-sm btn-default"><i class="fa fa-arrow-left"></i> Back</a>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
