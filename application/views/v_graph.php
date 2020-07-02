
<style>
.cliente {
	margin-top:30px;
	border: #cdcdcd medium solid;
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
}
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php //echo $title ?>
  </h1>
</section>

<section class="content">
  <div id="message">
    <?php //echo @$this->session->userdata('message') <> '' ? @$this->session->userdata('message') : ''; ?>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header with-border">
            <h1 class="box-title"><b>Statistik Hasil Kuesioner Pelaksanaan Protokol Kesehatan</b></h1>
        </div>
        <div class="box-body">
        <!-- /.col -->
        <div class="col-md-6">
          <div class="info-box bg-blue">
            <span class="info-box-icon"><i class="ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><h4>Total Responden</h4></span>
              <span class="info-box-number"><?php echo $jumlah_responden->jumlah_responden ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <!-- /.col -->
        <div class="col-md-6">
        <a href="<?php echo base_url() ?>grafik/print" target="_blank"> 
            <div class="info-box bg-yellow">
                <span class="info-box-icon"><i class="ion-ios-printer"></i></span>
                <div class="info-box-content">
                <h3>Print Laporan</h3>
                </div>
            </div>
        </a>
        </div>
        <!-- /.col -->
        <div class="container col-lg-12"></div>
        <?php
            for($i=1; $i <= $jumlah; $i++) {
                ${'arr' . $i} = array();
                foreach(${'graph' . $i} as $g1){
                    $data = array(
                        'name' => $g1->jawaban,
                        'y' => $g1->jumlah_jawaban
                    );
                    ${'arr' . $i}[] = $data;
                } 

                echo '<div class="col-md-6" style="padding-right:15px;padding-left:15px">
                <div class="cliente">
                <div id="report'.$i.'"></div></div></div>';
            }
        ?>
      </div>
      </div>
    </div>
  </div>
</section>

<!-- Script untuk memanggil library Highcharts -->
<script type="text/javascript">
<?php for($j=1; $j <= $jumlah; $j++) { ?>
Highcharts.chart('report<?php echo $j ?>', {
    colors: ['#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572',   
             '#FF9655', '#FFF263', '#6AF9C4'],
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: '<?php echo $j.". ".${'graph'.$j}[0]->nama_pertanyaan;  ?>'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f} %</b><br>Jumlah: <b>{point.y}</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Persentase',
        colorByPoint: true,
        data: <?php echo json_encode(${'arr' . $j}, JSON_NUMERIC_CHECK); ?>
    }]
});
<?php } ?>
</script>
