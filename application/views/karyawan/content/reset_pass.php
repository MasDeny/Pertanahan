<!--=================================
=            modal hapus            =
==================================-->
<div class="modal" id="reset" tabindex="-1" aria-hidden="true" role="dialog">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                    <h4 class="text-danger text-center">Informasi</h4>
                </div>
                <div class="modal-body text-center">
                        <form action="<?php echo base_url('karyawan/reset/reset_password'); ?>" method="post">
                        <input type="hidden" id="nip" name="nip">
                        <input type="password" class="form-control input-rounded password" name="new_password" placeholder="Masukan Password Baru">
                </div>
                <div class="modal-footer button-group text-center">
                    <button class="btn btn-danger" type="submit">Simpan</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<!--====  End of modal hapus  ====-->
<script type="text/javascript">
$(document).on("click", ".change", function () {
  var id = $(this).data('nip');
  $("#nip").val(id);
});
$(".password").mousedown(function(){
    $('.password').attr('type','text');
});
$(".password").mouseup(function(){
    $('.password').attr('type','password');
});
</script>
