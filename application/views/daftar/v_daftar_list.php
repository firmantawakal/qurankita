<section class="content-header">
  <h1>
    Daftar Isi
  </h1>
</section>
<section class="content">
  <div class="box box-solid">
    <div class="box-header with-border">
      <form id="form_search" action="<?php echo site_url('daftar/search');?>" method="GET">
          <div class="input-group">
            <input type="text" name="q" id="search1" class="form-control" placeholder="Cari surah...">
            <span class="input-group-btn">
                  <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
          </div>
        </form>
    </div>
    <div class="box-body no-padding">
      <ul class="nav nav-pills nav-stacked">
      <?php
        $no=1;
          foreach($surah as $dt){
      ?>
        <li><a href="<?php echo site_url("quran/detail/".$dt->id_surah) ?>"><span class="label label-primary" style="margin-right:10px"><?php echo $no++ ?></span> <?php echo $dt->surah ?></a></li>
      <?php 
        }
      ?>
      </ul>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /. box -->
</section>