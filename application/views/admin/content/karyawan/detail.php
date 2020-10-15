<!--=================================
=            modal edit            =
==================================-->
<div class="modal fade" id="detail" tabindex="-1" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-lg" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                    <h4 class="modal-title text-info text-center" ><b>Edit Karyawan</b></h4>
                </div>
                <div class="modal-body text-center">
                <form class="cmxform" id="form_view" enctype="multipart/form-data">
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
                    <input type="text" class="form-text dodo" name="jenkel" required>
                    <span class="bar"></span>
                    <label>Jenis Kelamin</label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:60px !important;">
                      <input type="password" class="form-text password" name="password" required>
                      <span class="bar"></span>
                      <label>Password</label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="text" class="form-text dodo" name="jabatan" required>
                      <span class="bar"></span>
                      <label>Jabatan</label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text dodo" name="status" required>
                    <span class="bar"></span>
                    <label>Status Karyawan</label>
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
                    <input type="text" class="form-text dodo" name="agama" required>
                    <span class="bar"></span>
                    <label>Agama</label>
                    </div>
                    <div class="form-group" style="margin-top:40px !important;">
                      <h5 class="pull-left">Foto Pegawai</h5><br><br>
                      <img src="" class="rounded img-fluid" alt="Responsive image" id="foto" width=120px>
                    </div>
                </div>
                </form>
                <div class="modal-footer button-group text-center clear" id="button">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>
  </div>
<!--====  End of modal hapus  ====-->