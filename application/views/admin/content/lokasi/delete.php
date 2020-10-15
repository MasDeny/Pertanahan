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
                        <H4><b>Anda Ingin Menghapus Lokasi Ini ?<b></H4>
                        <form action="<?php echo base_url('admin/location/delete_location'); ?>" method="post">
                        <input type="hidden" id="id" name="id">
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
  var id = $(this).data('id');
  $("#id").val(id);
});
</script>