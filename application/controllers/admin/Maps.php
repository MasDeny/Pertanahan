<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maps extends CI_controller {
    function __construct(){
        parent::__construct();
        $this->load->model('M_maps');
        $this->load->library('googlemaps');
        if ($this->session->userdata('status')=="") {
            redirect('cache');
        }
    }
    function index(){
        $posisi = $this->M_maps->get_data();
        $config=array();
        $config['center']="-7.9725407, 112.622038";
        $config['map_height']="400px";
        $this->googlemaps->initialize($config);
        $i = 1;
        foreach ($posisi as $row)
        {
        $dms = $row['titik_koor'];
        $lat = substr($dms,0,10);
        $long = substr($dms,11);
        $deg_lat = substr($lat,1,1);
        $min_lat = substr($lat,3,4);
        $sec_lat = substr($lat,6);
        $yah = $deg_lat+((($min_lat*60)+($sec_lat))/3600);
        $lat_dms = '-'.number_format((float)$yah, 6, '.', '');
        $deg_long = substr($long,1,3);
        $min_long = substr($long,5,6);
        $sec_long = substr($long,8);
        $yoh = $deg_long+((($min_long*60)+($sec_long))/3600);
        $long_dms = number_format((float)$yoh, 6, '.', '');

        $marker = array();
        $marker['position'] = $lat_dms.', '.$long_dms;
        $marker['infowindow_content'] = 'No             : '.$row['id_det'].'<br>'.
                                        'Nama Barang    : '.$row['nm_barang'].'<br>'.
                                        'Letter C       : '.$row['letterC'].'<br>'.
                                        'Kelurahan      : '.$row['kelurahan'].'<br>'.
                                        'Kecamatan      : '.$row['kecamatan'].'<br>'.
                                        'Letak Alamat   : '.$row['letak_alamat'].'<br>'.
                                        'Koordinat      : '.$lat_dms.', '.$long_dms.' / '.$dms;
        $this->googlemaps->add_marker($marker);
        }
        $data = array(
            'title' => "Admin Panel System - Peta Lokasi",
            'heading' => "Peta Lokasi",
            'map' => $this->googlemaps->create_map(),
            'user' => $this->session->userdata('username'),
        );
        $this->load->view('admin/content/peta/maps',$data);
    }
}