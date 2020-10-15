$(document).ready(function() {
//fungsi untuk menampilkan data yang di edit pada modal edit
$("#table").on("click", ".edited", function() {
    var id = $(this).data("nip");
    $('#form_edited')[0].reset();
    $('.foto').attr('name','foto');
    $('.dropify').attr('name','foto_lama');
    //load dari ajax
    $.ajax({
        url : "list_karyawan/edit_karyawan/"+id,
        type: "GET",
        dataType: "JSON",
        success :function(data){
            console.log(data);
            $('[name="nip"]').val(data.NIP);
            $('[name="nama"]').val(data.nama);
            $('[name="telepon"]').val(data.telepon);
            $('[name="jenkel"]').val(data.jenkel);
            $('[name="agama"]').val(data.agama);
            $('[name="status"]').val(data.status);
            $('[name="alamat"]').val(data.alamat);
            $('[name="jabatan"]').val(data.jabatan);
            $('[name="password"]').val(data.password);
            $('[name="foto"]').val(data.foto);

            $('#edit').modal('show');
        }
    });
});
//fungsi untuk menampilkan data yang yang dilihat secara detail pada modal detail
$("#table").on("click", ".viewed", function() {
    var id = $(this).data("nip");
    $('#form_view')[0].reset();
    //load dari ajax
    $.ajax({
        url : "list_karyawan/edit_karyawan/"+id,
        type: "GET",
        dataType: "JSON",
        success :function(data){
            console.log(data);
            $('[name="nip"]').val(data.NIP);
            $('[name="nama"]').val(data.nama);
            $('[name="telepon"]').val(data.telepon);
            $('[name="jenkel"]').val(data.jenkel);
            $('[name="agama"]').val(data.agama);
            $('[name="status"]').val(data.status);
            $('[name="alamat"]').val(data.alamat);
            $('[name="jabatan"]').val(data.jabatan);
            $('[name="password"]').val(data.password);
            $('#foto').attr('src','../photos/'+data.foto);

            $('#detail').modal('show');
        }
    });
});
$(".password").mousedown(function(){
    $('.password').attr('type','text');
});
$(".password").mouseup(function(){
    $('.password').attr('type','password');
});
$(".cancel").click(function(){
    $('#form_edited')[0].reset();
    $(".dropify-clear").trigger("click");
    $('.foto').attr('name','foto');
    $('.dropify').attr('name','foto_lama');
});
$(".dropify-wrapper").click(function(){
    $('.dropify').attr('name','foto');
    $('.foto').attr('name','foto_lama');
});
});




