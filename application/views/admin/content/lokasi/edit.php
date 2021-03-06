<!--=================================
=            modal edit            =
==================================-->
<div class="modal fade" id="edit" tabindex="-1" aria-hidden="true" role="dialog">
  <div class="modal-dialog modal-lg" role="dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-info text-center" ><b>Edit Lokasi</b></h4>
      </div>
      <div class="modal-body text-center">
        <form id="form_edited" action="<?php echo base_url()?>admin/location/save_data" method="post">
          <div class="col-md-6 col-sm-12 text-default">
            <div class="form-group form-animate-text" style="margin-top:65px !important;">
              <input type="hidden" id="id_det" name="id_det">
              <input type="hidden" id="id_det" name="status" value="update">
              <input type="text" class="form-text" name="kecamatan" required>
              <span class="bar"></span>
              <label>Nama Kecamatan</label>
            </div>
            <div class="form-group form-animate-text">
              <input type="text" class="form-text" name="kelurahan" required>
              <span class="bar"></span>
              <label>Nama Kelurahan</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
              <textarea class="form-text" name="nm_barang"></textarea>
              <span class="bar"></span>
              <label>Nama Barang</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
              <input type="text" class="form-text" name="kode_barang">
              <span class="bar"></span>
              <label>Kode barang</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
              <input type="text" class="form-text" name="register">
              <span class="bar"></span>
              <label>Nomer Register</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
              <input type="text" class="form-text" name="tahun_pengadaan">
              <span class="bar"></span>
              <label>Tahun Pengadaan</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
              <textarea class="form-text " name="letak_alamat"></textarea>
              <span class="bar"></span>
              <label>Alamat</label>
            </div>
            <div class="form-group form-animate-text"  style="margin-top:70px !important;">
              <input type="text" class="form-text" name="peruntukan">
              <span class="bar"></span>
              <label>Peruntukan</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
              <textarea class="form-text" name="sertipikat"></textarea>
              <span class="bar"></span>
              <label>Sertipikat</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
              <textarea class="form-text" name="letter_c"></textarea>
              <span class="bar"></span>
              <label>Letter C</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
              <textarea class="form-text" name="sppt"></textarea>
              <span class="bar"></span>
              <label>Nomer SPPT</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
              <input type="text" class="form-text" name="luas">
              <span class="bar"></span>
              <label>Luas Tanah</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:70px !important;">
              <input type="text" class="form-text" name="penggunaan">
              <span class="bar"></span>
              <label>Penggunaan Tanah</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
              <input type="text" class="form-text" name="peta_block">
              <span class="bar"></span>
              <label>Peta Block</label>
            </div>
            <div class="form-group form-animate-text">
              <input type="text" class="form-text" name="nomer_induk_bidang">
              <span class="bar"></span>
              <label>Nomer Induk Bidang</label>
            </div>
            <div class="form-group form-animate-text">
              <input type="text" class="form-text" name="titik_koor">
              <span class="bar"></span>
              <label>Titik Koordinat</label>
            </div>
            <div class="form-group form-animate-text">
              <textarea class="form-text" name="kesesuaian_tataruang"></textarea>
              <span class="bar"></span>
              <label>Kesesuaian Tata Ruang</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
              <textarea class="form-text" name="keterangan"></textarea>
              <span class="bar"></span>
              <label>Keterangan Tanah</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
              <textarea class="form-text" name="temuan"></textarea>
              <span class="bar"></span>
              <label>Temuan Tanah</label>
            </div>
          </div>
          <div class="modal-footer button-group text-center clear" id="button" >
            <button class="btn btn-danger updated" type="submit">Simpan</button>
            <button class="btn btn-warning cancel" data-dismiss="modal">Batal</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--====  End of modal hapus  ====-->