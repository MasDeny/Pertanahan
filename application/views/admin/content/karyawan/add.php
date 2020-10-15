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
            <li class="time">
              <h1 class="animated fadeInLeft">21:00</h1>
              <p class="animated fadeInRight">Sat,1st October 2029</p>
            </li>
            <li>
              <img class="img-rounded" src="<?php echo base_url(); ?>assets/images/logo.png" width=200px>
            </li>
            <li class="active ripple">
              <a href="../list_karyawan" style="font-size: 25px"><span class="fa fa-arrow-left"></span> Kembali</a>
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
                <form class="cmxform" id="form_val" action="<?php echo base_url()?>admin/list_karyawan/save_data" method="post" enctype="multipart/form-data">
                <div class="col-md-6 col-sm-12 text-default">
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="text" class="form-text dodo" name="nip" required>
                      <span class="bar"></span>
                      <label>NIP</label>
                    </div>
                    <div class="form-group form-animate-text">
                      <input type="text" class="form-text dodo" name="nama" required>
                      <span class="bar"></span>
                      <label>Nama Karyawan</label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <h4 style="margin-bottom:15px !important; margin-left: 5px;">Jenis Kelamin</h4>
                      <select name="jenkel" class="form-control text-center" required>
                        <option disabled default selected>-- Pilih --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                      <span class="bar"></span>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="text" class="form-text mask-phone" name="telepon" required>
                      <label>No. Telepon</label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <textarea class="form-text dodo" name="alamat" required></textarea>
                      <span class="bar"></span>
                      <label>Alamat</label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:20px !important;">
                      <h4 style="margin-bottom:15px !important; margin-left: 5px;">Pilih Agama</h4>
                      <select name="agama" class="form-control text-center" required>
                        <option disabled default selected>-- Pilih --</option>
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="protestan">Protestan</option>
                        <option value="hindu">Hindu</option>
                        <option value="budform-animate-textha">Budha</option>
                      </select>
                      <span class="bar"></span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="text" class="form-text dodo" name="jabatan" required>
                      <span class="bar"></span>
                      <label>Jabatan</label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:-20px !important;">
                      <h4 style="margin-bottom:15px !important; margin-left: 5px;">Status Karyawan</h4>
                      <select name="status" class="form-control text-center" required>
                        <option disabled default selected>-- Pilih --</option>
                        <option value="kontrak">Kontrak</option>
                        <option value="tetap">Tetap</option>
                      </select>
                      <span class="bar"></span>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <h4 style="margin-bottom:15px !important; margin-left: 5px;">Foto Pegawai</h4>
                      <input type="file" name="foto" class="dropify" id="input-file-max-fs" data-max-file-size="2M" required>
                      <span class="bar"></span>
                      <i class="pull-right">* Data maksimal berukuran 2Mb</i>
                    </div>
                    <div class="col-md-12" style="margin-top:80px !important;">
                      <div class="pull-right">
                        <button class="btn btn-default" onclick="reset()"> Kosongkan</button>
                        <button class="submit btn btn-info" type="submit"> Simpan</button>
                      </div>
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
  $('.mask-phone').mask('0000-0000-00000');

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
  nip: {
  required: true,
  minlength: 2
  },
  nama: {
  required: true,
  minlength: 2
  },
  telepon: {
  required: true,
  minlength: 5,
  maxlength: 15
  },
  jabatan: "required",
  alamat: "required",
  jenkel: "required",
  agama: "required",
  status: "required",
  foto: "required"
  },
  messages: {
  nip: {
  required: "Masukkan NIP dengan sesuai",
  minlength: "Panjang NIP minimal 2 karakter"
  },
  nama: {
  required: "Masukkan nama karyawan dengan sesuai",
  minlength: "Panjang nama karyawan minimal 2 karakter"
  },
  telepon: {
  required: "Masukkan nomor telepon karyawan dengan sesuai",
  minlength: "Panjang nomor telepon karyawan minimal 5 angka",
  maxlength: "Panjang nomor telepon karyawan maksimal 13 angka"
  },
  jabatan: "Masukkan jenis jabatan karyawan",
  jenkel: "Tentukan Jenis Kelamin karyawan",
  alamat: "Isilah alamat karyawan",
  agama: "Tentukan agama karyawan",
  status: "Tentukan status karyawan",
  foto: "Tidak Ada foto yang dipilih"
  }
  });
  });
  </script>
</body>
</html>