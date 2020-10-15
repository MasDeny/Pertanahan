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
          <a href="list_karyawan/add_karyawan" class="btn btn-flat btn-info"> <span class="fa fa-plus"></span> Tambah Karyawan</a><br>
          <div class="panel">
            <div class="panel-body">
              <div class="responsive-table">
                <div id="notifications">
                  <?php echo $this->session->flashdata('notif')?>
                </div>
                <table class="table table-striped table-bordered" width="100%" cellspacing="0" id="table">
                  <thead class="thead-light">
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama Karyawan</th>
                    <th>Telepon</th>
                    <th>Status</th>
                    <th></th>
                  </thead>
                  <tbody>
                    <?php if (is_null($karyawan) || empty($karyawan)): ?>
                    <div class="text-center breadcrumb">
                      <i class="glyphicon glyphicon-alert text-center text-danger"><p>data kosong</p></i>
                    </div>
                    <?php else: ?>
                    <?php
                    foreach($karyawan as $data) {
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $data->NIP; ?></td>
                      <td><?php echo $data->nama; ?></td>
                      <td><?php echo $data->telepon; ?></td>
                      <td><?php echo $data->status; ?></td>
                      <td>
                        <div class="btn-group-sm text-center" id="action">
                          <input type="hidden" id="<?php echo $data->NIP;?>">
                          <a class="btn btn-sm btn-success btn-flat viewed" data-nip="<?php echo $data->NIP ?>"><i class="fa fa-eye"></i> Detail</a>
                          <a class="btn btn-sm btn-info btn-flat edited" data-nip="<?php echo $data->NIP ?>"><i class="fa fa-pencil-square-o"></i> Edit</a>
                          <a data-nip="<?php echo $data->NIP ?>" data-foto="<?php echo $data->foto ?>" class="btn btn-sm btn-danger btn-flat delete" data-toggle="modal" data-target="#hapus"><i class="fa fa-trash-o"></i> Hapus</a>
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
  var table = $('#table').DataTable({
  "bLengthChange": false,
  "ordering": false,
  "iDisplayLength": 5,
  });
  $('.dropify').dropify({
    messages: {
    default: 'Drag atau drop untuk memilih gambar',
    replace: 'Ganti',
    remove:  '&times;',
    error:   'error'
    }
    });
  } );
  </script>
  <script  type="text/javascript" src="<?php echo base_url(); ?>assets/js/karyawan.js"></script>
  <?php $this->load->view('admin/content/karyawan/delete'); ?>
  <?php $this->load->view('admin/content/karyawan/detail'); ?>
  <?php $this->load->view('admin/content/karyawan/edit'); ?>
</body>
</html>