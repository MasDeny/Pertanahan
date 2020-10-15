$(document).ready(function() {
//fungsi untuk menampilkan data yang di edit pada modal edit
$("#tabel").on("click", ".edited", function() {
    var id = $(this).data("id");
    $('#form_edited')[0].reset();
    //load dari ajax
    $.ajax({
        url : "location/edit_location/"+id,
        type: "GET",
        dataType: "JSON",
        success :function(data){
            console.log(data);
            $('[name="id_det"]').val(data.id_det);
            $('[name="kecamatan"]').val(data.kecamatan);
            $('[name="kelurahan"]').val(data.kelurahan);
            $('[name="nm_barang"]').val(data.nm_barang);
            $('[name="kode_barang"]').val(data.kode_barang);
            $('[name="register"]').val(data.register);
            $('[name="tahun_pengadaan"]').val(data.tahun_pengadaan);
            $('[name="letak_alamat"]').val(data.letak_alamat);
            $('[name="peruntukan"]').val(data.peruntukan);
            $('[name="sertipikat"]').val(data.sertipikat);
            $('[name="letter_c"]').val(data.letterC);
            $('[name="sppt"]').val(data.no_SPPT);
            $('[name="luas"]').val(data.luas_m2);
            $('[name="penggunaan"]').val(data.penggunaan);
            $('[name="peta_block"]').val(data.peta_block);
            $('[name="nomer_induk_bidang"]').val(data.nomer_induk_bidang);
            $('[name="titik_koor"]').val(data.titik_koor);
            $('[name="kesesuaian_tataruang"]').val(data.kesesuaian_tataruang);
            $('[name="keterangan"]').val(data.keterangan);
            $('[name="temuan"]').val(data.temuan);

            $('#edit').modal('show');
        }
    });
});
//fungsi untuk menampilkan data yang yang dilihat secara detail pada modal detail
$("#tabel").on("click", ".viewed", function() {
    var id = $(this).data("id");
    $('#form_view')[0].reset();
    //load dari ajax
    $.ajax({
        url : "location/edit_location/"+id,
        type: "GET",
        dataType: "JSON",
        success :function(data){
            // console.log(data);
            $('[name="id_det"]').val(data.id_det);
            $('[name="kecamatan"]').val(data.kecamatan);
            $('[name="kelurahan"]').val(data.kelurahan);
            $('[name="nm_barang"]').val(data.nm_barang);
            $('[name="kode_barang"]').val(data.kode_barang);
            $('[name="register"]').val(data.register);
            $('[name="tahun_pengadaan"]').val(data.tahun_pengadaan);
            $('[name="letak_alamat"]').val(data.letak_alamat);
            $('[name="peruntukan"]').val(data.peruntukan);
            $('[name="sertipikat"]').val(data.sertipikat);
            $('[name="letter_c"]').val(data.letterC);
            $('[name="sppt"]').val(data.no_SPPT);
            $('[name="luas"]').val(data.luas_m2);
            $('[name="penggunaan"]').val(data.penggunaan);
            $('[name="peta_block"]').val(data.peta_block);
            $('[name="nomer_induk_bidang"]').val(data.nomer_induk_bidang);
            $('[name="titik_koor"]').val(data.titik_koor);
            $('[name="kesesuaian_tataruang"]').val(data.kesesuaian_tataruang);
            $('[name="keterangan"]').val(data.keterangan);
            $('[name="temuan"]').val(data.temuan);

            $('#detail').modal('show');
        }
    });
});


$(".cancel").click(function(){
    $('#form_edited')[0].reset();
});
});




