<!--=================================
=            modal edit            =
==================================-->
<div class="modal fade" id="edit" tabindex="-1" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-lg" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                    <h4 class="modal-title text-info text-center" ><b>Edit Karyawan</b></h4>
                </div>
                <div class="modal-body text-center">
				<!--fungsi yang harus ada ketika edit data-->
               <form class="cmxform" id="form_edited" action="<?php echo base_url()?>admin/list_karyawan/update_karyawan" method="post" enctype="multipart/form-data">
                <div class="col-md-6 col-sm-12 text-default">
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="text" class="form-text dodo" name="nip" required>
                      <span class="bar"></span>
                      <label>NIP</label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="text" class="form-text mask-phone dodo" name="telepon" required>
                      <label>No. Telepon</label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <h4 class="pull-left" style="margin-bottom:15px !important;">Jenis Kelamin</h4>
                      <select name="jenkel" class="form-control text-center" required>
                        <option disabled default selected>-- Pilih --</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                      </select>
                      <span class="bar"></span>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="password" class="form-text password" name="password" required>
                      <span class="bar"></span>
                      <label>Password</label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="text" class="form-text dodo" name="jabatan" required>
                      <span class="bar"></span>
                      <label>Jabatan</label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:-25px !important;">
                      <h4 class="pull-left" style="margin-bottom:15px !important;">Status Karyawan</h4>
                      <select name="status" class="form-control text-center" required>
                        <option disabled default selected>-- Pilih --</option>
                        <option value="kontrak">Kontrak</option>
                        <option value="tetap">Tetap</option>
                      </select>
                      <span class="bar"></span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="text" class="form-text dodo" name="nama" required>
                      <span class="bar"></span>
                      <label>Nama Karyawan</label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="text" class="form-text dodo" name="alamat" required>
                      <span class="bar"></span>
                      <label>Alamat</label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <h4 class="pull-left" style="margin-bottom:15px !important;">Pilih Agama</h4>
                      <select name="agama" class="form-control text-center" required>
                        <option disabled default selected>-- Pilih --</option>
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="protestan">Protestan</option>
                        <option value="hindu">Hindu</option>
                        <option value="budha">Budha</option>
                      </select>
                      <span class="bar"></span>
                    </div>
                    <div class="form-group" id="foto" style="margin-top:20px !important;">
                      <h4 class="pull-left" style="margin-bottom:15px !important;">Foto Pegawai</h4>
                      <input type="file" name="foto_lama" class="dropify drop" id="input-file-max-fs" data-max-file-size="2M">
                      <span class="bar"></span>
                      <input type="hidden" class="foto" name="foto">
                      <i class="pull-right">* Data maksimal berukuran 2Mb</i>
                    </div>
                </div>
                <div class="modal-footer button-group text-center clear" id="button">
                    <button class="btn btn-danger updated">Simpan</button>
                    <button class="btn btn-warning cancel" data-dismiss="modal">Batal</button>
                </div>
                </form>
            </div>
        </div>
</div>
<!--====  End of modal hapus  ====-->