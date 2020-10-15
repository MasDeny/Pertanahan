<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
  <?php $this->load->view('admin/template/header'); ?>
  <?php echo $map['js'];?>
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
          <div class="panel">
            <div class="panel-body">
              <?php echo $map['html'];?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $this->load->view('admin/template/mobilebar'); ?>
  <!-- end: content -->
  <?php $this->load->view('admin/template/footer'); ?>
</body>
</html>