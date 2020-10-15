<!--=================================
=            modal hapus            =
==================================-->
<div class="modal fade" id="unvailable" tabindex="-1" aria-hidden="true" role="dialog">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                    <h2 class="modal-title text-warning text-center">Pemberitahuan !</h2>
                </div>
                <div class="modal-body text-center">
                        <H3 class="text-danger"><b>Fitur ini belum tersedia<b></H3>
                        <H4><b>silahkan hubungi dinas terkait untuk mendapatkan fitur berikut<b></H4>
                </div>
                <div class="modal-footer button-group text-center">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
                </div>
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