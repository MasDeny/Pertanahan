<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('karyawan/template/header'); ?>
<?php echo $map['js'];?>
<body class="fix-header fix-sidebar">

	<div id="main-wrapper"> 
	<?php $this->load->view('karyawan/template/navbar'); ?>
	<?php $this->load->view('karyawan/template/sidebar'); ?>
	<!-- Page wrapper  -->
        <div class="page-wrapper">
            <div id="notifications">
                  <?php echo $this->session->flashdata('notif')?>
                </div>
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Semua Lokasi</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Peta</li>
                        <li class="breadcrumb-item active">Semua Lokasi</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <div class="row" style="margin-top: -30px !important;">
                    <div class="col-md-12">
                        <div class="card">
                           <?php echo $map['html'];?>
                        </div>
                        <!-- /# card -->
                    </div>
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            
            <!-- End footer -->
        </div>

     </div>
     <?php $this->load->view('karyawan/template/footer'); ?>
     <?php $this->load->view('karyawan/content/reset_pass'); ?>
        <!-- End Page wrapper  -->
	</body>
</html>