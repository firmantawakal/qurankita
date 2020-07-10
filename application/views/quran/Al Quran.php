<style>
.latin{
  font-family:'Roboto' !important;
  font-size: 18px;
  margin-top: 25px;
  line-height: 22px;
}

.ayat{
  font-size: 27px;
  padding-top:15px;
  font-family:'lpmq' !important;
  line-height: 50px;
}

.arti{
  font-size: 15px; 
  line-height: 22px;
}
</style>
<section class="content-header">
<?= anchor('daftar', '<div class="btn btn-sm btn-default"> <i class="fa fa-long-arrow-left"></i> </div>'); ?>

  <div class="text-center mb-5">
    <h3 style="font-size: 25px;"><strong><?= $title; ?></strong></h3>
    <?php foreach ($surah as $s) : ?>
    <h5 style="font-size: 18px;"><?= $s['arti_surah']; ?></h5>
    <h6 style="font-size: 15px;"><?= $s['jumlah_ayat']; ?> Ayat</h6>
    <?php endforeach; ?>
    <!-- <hr> -->
    <?php foreach($bismillah as $b) : ?>
    <h3 class="ayat" style="font-size: 27px;"><?= $b['ayat']; ?></h3>
    <h5 style="font-size: 18px;margin-top:25px"><?= $b['arti_ayat']; ?></h5>
    <?php endforeach; ?>
    <hr>
  </div>
</section>
<section class="content">
  <div class="box box-solid">
    <div class="box-body">
      <?= $this->session->flashdata('message'); ?>
        <?php 
        $no = 1;
        foreach ($quran as $q) : ?>
        <div class="btn btn-primary" style="padding-top:0px !important;">
          <h6 class="text-left" style="font-size: 13px;"><?= $q->nomor_ayat; ?></h6>
        </div>
        <h4 class="text-right text-dark ayat"><?= $q->ayat; ?></h4>
        <h5 class="text-left text-bold latin"><?= $q->latin; ?></h5>
        <h6 class="text-left arti"><?= $q->arti_ayat; ?></h6>
        <hr>
        <?php endforeach; ?>
        <?= anchor('daftar', '<div class="btn btn-sm btn-default"> <i class="fa fa-long-arrow-left"></i> </div>'); ?>
      </div>
    </div>
    <!-- /.box-body -->
</section>