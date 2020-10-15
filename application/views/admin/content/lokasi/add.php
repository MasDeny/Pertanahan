 <?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
  <?php $this->load->view('admin/template/header'); ?>
  <body id="mimin" class="dashboard">
    <?php $this->load->view('admin/template/navbar'); ?>
    <div class="container-fluid mimin-wrapper">
      <div id="left-menu">
        <div class="sub-left-menu scroll">
          <ul class="nav nav-list">
            <li><div class="left-bg"></div></li>
            <li class="time" style="margin-top: -50px; ">
              <h1 class="animated fadeInLeft">21:00</h1>
              <p class="animated fadeInRight">Sat,1st October 2029</p>
            </li>
            <li>
              <img class="img-rounded center-block" src="<?php echo base_url(); ?>assets/images/logo.png" width=150px>
            </li>
            <li class="active ripple">
              <a href="../location" style="font-size: 25px"><span class="fa fa-arrow-left"></span> Kembali</a>
            </li>
          </ul>
        </div>
      </div>
      <div id="content">
        <div class="panel box-shadow-none content-header">
          <div class="panel-body">
            <div class="col-md-12">
              <h3 class="animated fadeInLeft"><b class="text-info"><?php echo $heading ?></b></h3>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-body ">
              <div class="col-md-12 article-v1-body">
                <form class="cmxform" id="form_val" action="<?php echo base_url()?>admin/location/save_data" method="post">
                <div class="col-md-6 col-sm-12 text-default">
                  <div class="form-group form-animate-text" style="margin-top:25px !important;">
                      <input type="text" class="form-text dodo" name="kecamatan" required>
                      <span class="bar"></span>
                      <label>Nama Kecamatan</label>
                    </div>
                  <div class="form-group form-animate-text">
                      <input type="text" class="form-text dodo" name="kelurahan" required>
                      <span class="bar"></span>
                      <label>Nama Kelurahan</label>
                    </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <textarea class="form-text dodo" name="nm_barang"></textarea>
                      <span class="bar"></span>
                      <label>Nama Barang</label>
                    </div>
                   <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="text" class="form-text mask-phone dodo" name="kode_barang">
                      <span class="bar"></span>
                      <label>Kode barang</label>
                    </div>
                  <div class="form-group form-animate-text " style="margin-top:40px !important;">
                      <input type="text" class="form-text mask-phone dodo" name="register">
                      <span class="bar"></span>
                      <label>Nomer Register</label>
                    </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="text" class="form-text mask-phone dodo" name="tahun_pengadaan">
                      <span class="bar"></span>
                      <label>Tahun Pengadaan</label>
                    </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <textarea class="form-text dodo" name="letak_alamat"></textarea>
                      <span class="bar"></span>
                      <label>Alamat</label>
                    </div>
                    <div class="form-group form-animate-text"  style="margin-top:70px !important;">
                      <input type="text" class="form-text dodo" name="peruntukan">
                      <span class="bar"></span>
                      <label>Peruntukan</label>
                    </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <textarea class="form-text dodo" name="sertipikat"></textarea>
                      <span class="bar"></span>
                      <label>Sertifikat</label>
                    </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <textarea class="form-text dodo" name="letter_c"></textarea>
                      <span class="bar"></span>
                      <label>Letter C</label>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group form-animate-text">
                      <textarea class="form-text dodo" name="sppt"></textarea>
                      <span class="bar"></span>
                      <label>Nomer SPPT</label>
                    </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="text" class="form-text mask-phone dodo" name="luas">
                      <span class="bar"></span>
                      <label>Luas Tanah</label>
                    </div>
                  <div class="form-group form-animate-text" style="margin-top:70px !important;">
                      <input type="text" class="form-text mask-phone dodo" name="penggunaan">
                      <span class="bar"></span>
                      <label>Penggunaan Tanah</label>
                    </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="text" class="form-text mask-phone dodo" name="peta_block">
                      <span class="bar"></span>
                      <label>Peta Block</label>
                    </div>
                    <div class="form-group form-animate-text">
                      <input type="text" class="form-text dodo" name="nomer_induk_bidang">
                      <span class="bar"></span>
                      <label>Nomer Induk Bidang</label>
                    </div>
                    <div class="form-group form-animate-text">
                      <input type="text" class="form-text dodo" name="titik_koor">
                      <span class="bar"></span>
                      <label>Titik Koordinat</label>
                    </div>
                    <div class="form-group form-animate-text">
                      <textarea class="form-text dodo" name="kesesuaian_tataruang"></textarea>
                      <span class="bar"></span>
                      <label>Kesesuaian Tata Ruang</label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <textarea class="form-text dodo" name="keterangan"></textarea>
                      <span class="bar"></span>
                      <label>Keterangan Tanah</label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <textarea class="form-text dodo" name="temuan"></textarea>
                      <span class="bar"></span>
                      <label>Temuan Tanah</label>
                    </div>
                </div>
                <div class="col-md-6" style="margin-top:40px !important;">
                      <div class="pull-right">
                        <button class="btn btn-default" onclick="reset()"> Kosongkan</button>
                        <button class="submit btn btn-info" type="submit"> Simpan</button>
                      </div>
                  </form>
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
  <script type="text/javascript">
  $(document).ready(function(){
  $('.dropify').dropify({
  messages: {
  default: 'Drag atau drop untuk memilih gambar',
  replace: 'Ganti',
  remove:  '&times;',
  error:   'error'
  }
  });
  });
  function reset(){
    $('#form_val')[0].reset();
  }
  </script>
  <script type="text/javascript">
  $(document).ready(function(){
  $("#form_val").validate({
  errorElement: "em",
  errorPlacement: function(error, element) {
  $(element.parent("div").addClass("form-animate-error"));
  error.appendTo(element.parent("div"));
  },
  success: function(label) {
  $(label.parent("div").removeClass("form-animate-error"));
  },
  rules: {
  kecamatan: "required",
  kelurahan: "required"
  },
  messages: {
  kecamatan: "Kecamatan Wajib diisi",
  kelurahan: "Kelurahan Wajib diisi"
  }
  });
  });
  </script>
</body>
</html>