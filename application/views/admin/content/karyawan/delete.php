<!--=================================
=            modal hapus            =
==================================-->
<div class="modal fade" id="hapus" tabindex="-1" aria-hidden="true" role="dialog">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                    <h4 class="modal-title text-danger text-center" id="">Peringatan !</h4>
                </div>
                <div class="modal-body text-center">
                        <H4><b>Anda Ingin Menghapus Karyawan Ini ?<b></H4>
                        <form action="<?php echo base_url('admin/list_karyawan/delete_karyawan'); ?>" method="post">
                        <input type="hidden" id="nip" name="nip">
                        <input type="text" id="foto" name="foto">
                </div>
                <div class="modal-footer button-group text-center">
                    <button class="btn btn-danger" type="submit">Ya</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Tidak</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<!--====  End of modal hapus  ====-->

<script type="text/javascript">
$(document).on("click", ".delete", function () {
  var nip = $(this).data('nip');
  $("#nip").val(nip);
  var foto = $(this).data('foto');
  $("#foto").val(foto);
});
</script>