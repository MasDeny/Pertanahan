<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
  <?php $this->load->view('admin/template/header'); ?>
  <body id="mimin" class="dashboard">
    <?php $this->load->view('admin/template/navbar'); ?>
    <div class="container-fluid mimin-wrapper">
      <?php $this->load->view('admin/template/sidebar'); ?>
      <div id="content">
        <div class="col-md-12 padding-0" style="margin-top:20px;">
          <div class="col-md-4 padding-0">
            <div class="panel chart-title text-center text-primary">
              <h3><span class="fa fa-users"></span>   Jumlah Karyawan</h3>
              <h4><b><?php echo $jml_karyawan; ?> orang</b></h4>
            </div>
            <div class="panel">
              <div class="panel-heading-white panel-heading bg-light-blue">
                <h4 class="text-white">Karyawan Berdasarkan Jenis Kelamin</h4>
              </div>
              <div class="panel-body">
                <center>
                <canvas class="pie-chart"></canvas>
                </center>
              </div>
            </div>
            <div class="panel">
              <div class="panel-heading-white panel-heading bg-light-blue">
                <h4 class="text-white">Karyawan Berdasarkan Status Kepegawaian</h4>
              </div>
              <div class="panel-body">
                <center>
                <canvas class="pie-chart-status"></canvas>
                </center>
              </div>
            </div>
            </div>
          <div class="col-md-8 padding-0" style="padding-left: 15px;">
            <div class="panel chart-title text-center text-success">
              <h3><span class="fa fa-location-arrow"></span>   Jumlah lokasi tercatat</h3>
              <h4><b><?php echo $jml_lokasi; ?> wilayah</b></h4>
            </div>
            <div class="panel">
              <div class="panel-heading panel-heading bg-teal">
                <h4 class="text-white">Lokasi Berdasarkan dari Kecamatan</h4>
              </div>
              <div class="panel-body">
                <div class="col-md-12">
                  <canvas class="bar-chart"></canvas>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $this->load->view('admin/template/mobilebar'); ?>
  <!-- end: content -->
  <?php $this->load->view('admin/template/footer'); ?>
  <script  type="text/javascript">
     (function(jQuery){
              var doughnutData = [
                {
                    value: <?php echo $karyawan_laki; ?>,
                    color:"#5BAABF",
                    highlight: "#15BA67",
                    label: "Laki - Laki "
                },
                {
                    value: <?php echo $karyawan_perempuan; ?>,
                    color: "#94D7E9",
                    highlight: "#15BA67",
                    label: "Perempuan "
                }
            ];
            var barData = {
            labels: ["Kepanjen", "Dampit", "Turen"],
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "rgba(21,186,103,0.5)",
                    strokeColor: "rgba(220,220,220,0.8)",
                    highlightFill: "rgba(220,220,220,0.75)",
                    highlightStroke: "rgba(220,220,220,1)",
                    data: [<?php echo $kepanjen; ?>, <?php echo $dampit; ?>, <?php echo $turen; ?>]
                }
            ]
        };

        var dpieData = [
                {
                    value: <?php echo $karyawan_tetap; ?>,
                    color:"#94D7E9",
                    highlight: "#15BA67",
                    label: "Karyawan Tetap "
                },
                {
                    value: <?php echo $karyawan_kontrak; ?>,
                    color: "#BBE0E9",
                    highlight: "#15BA67",
                    label: "Karyawan Kontrak "
                }
            ];
            window.onload = function(){
                var ctx2 = $(".pie-chart")[0].getContext("2d");
                window.myPie = new Chart(ctx2).Pie(doughnutData, {
                    responsive : true,
                    showTooltips: true
                });

                var ctx3 = $(".pie-chart-status")[0].getContext("2d");
                window.myPie = new Chart(ctx3).Pie(dpieData, {
                    responsive : true,
                    showTooltips: true
                });

                var ctx4 = $(".bar-chart")[0].getContext("2d");
                window.myBar = new Chart(ctx4).Bar(barData, {
                    responsive : true,
                    showTooltips: true
                });
            };
      })(jQuery);
  </script>
</body>
</html>