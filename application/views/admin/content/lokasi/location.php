<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
  <?php $this->load->view('admin/template/header'); ?>
  <body id="mimin" class="dashboard">
    <?php $this->load->view('admin/template/navbar'); ?>
    <div class="container-fluid mimin-wrapper">
      <?php $this->load->view('admin/template/sidebar'); ?>
      <div id="content">
        <div class="panel box-shadow-none content-header">
          <div class="panel-body">
            <div class="col-md-12">
              <h3 class="animated fadeInLeft"><b class="text-info"><?php echo $heading ?></b></h3>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <a href="location/add_location" class="btn btn-flat btn-info"> <span class="fa fa-plus"></span> Tambah Lokasi</a><br>
          <div class="panel">
            <div class="panel-body">
              <div class="responsive-table">
                <div id="notifications">
                  <?php echo $this->session->flashdata('notif')?>
                </div>
                <table class="table table-striped table-bordered" width="100%" cellspacing="0" id="tabel">
                  <thead class="thead-light">
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Kecamatan</th>
                    <th>Kelurahan</th>
                     <th>Tahun Pengadaan</th>
                    <th></th>
                  </thead>
                  <tbody>
                    <?php if (is_null($lokasi) || empty($lokasi)): ?>
                    <div class="text-center breadcrumb">
                      <i class="glyphicon glyphicon-alert text-center text-danger"><p>data kosong</p></i>
                    </div>
                    <?php else: ?>
                    <?php
                    foreach($lokasi as $data) {
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $data->kode_barang; ?></td>
                      <td><?php echo $data->nm_barang; ?></td>
                      <td><?php echo $data->kecamatan; ?></td>
                      <td><?php echo $data->kelurahan; ?></td>
                      <td><?php echo $data->tahun_pengadaan; ?></td>
                      <td>
                        <div class="btn-group-sm text-center" id="action">
                          <a class="btn btn-sm btn-success btn-flat viewed" data-id="<?php echo $data->id_det; ?>"><i class="fa fa-eye"></i> Detail</a>
                          <a class="btn btn-sm btn-info btn-flat edited" data-id="<?php echo $data->id_det; ?>"><i class="fa fa-pencil-square-o"></i> Edit</a>
                          <a data-id="<?php echo $data->id_det; ?>" class="btn btn-sm btn-danger btn-flat delete" data-toggle="modal" data-target="#hapus"><i class="fa fa-trash-o"></i> Hapus</a>
                        </div>
                      </td>
                    </tr>
                    <?php } ?>
                    <?php endif ?>
                  </tbody>
                </table>
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
  $(document).ready(function() {
  var table = $('#tabel').DataTable({
  "bLengthChange": false,
  "iDisplayLength": 10,
  "columnDefs": [
    { "width": "20%", "targets": 2 }
  ],
  });

  } );
  </script>
  <script  type="text/javascript" src="<?php echo base_url(); ?>assets/js/location.js"></script>
  <?php $this->load->view('admin/content/lokasi/delete'); ?>
  <?php $this->load->view('admin/content/lokasi/detail'); ?>
  <?php $this->load->view('admin/content/lokasi/edit'); ?>
</body>
</html>