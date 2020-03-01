<?php

  class Gaji extends CI_Controller
  {
    
    function __construct()
    {
      parent::__construct();
      //checkAksesModule();
      $this->load->library('ssp');
      $this->load->model('model_gaji');
      $this->load->model('model_bonus');
      $this->load->model('model_karyawan');

    }

    function data()
    {

      // nama table
      $table      = 'tbl_gaji';
      // nama PK
      $primaryKey = 'kode_penggajian';
      // list field yang mau ditampilkan
      $columns    = array(
            //tabel db(kolom di database) => dt(nama datatable di view)
            array('db' => 'nama', 'dt' => 'nama'),
            array('db' => 'tanggal_penerimaan', 'dt' => 'tanggal_penerimaan'),
            array('db' => 'nominal', 'dt' => 'nominal'),
            //untuk menampilkan aksi(edit/delete dengan parameter id karyawan)
            array(
                  'db' => 'kode_penggajian',
                  'dt' => 'aksi',
                  'formatter' => function($d) {
                      return anchor('gaji/delete/'.$d, '<i class="fa fa-times fa fa-white"></i>', 'class="btn btn-xs btn-danger" data-placement="top" title="Delete"');
                }
            )
        );

      $sql_details = array(
        'user' => $this->db->username,
        'pass' => $this->db->password,
        'db'   => $this->db->database,
        'host' => $this->db->hostname
        );

        echo json_encode(
          SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
         );

    }


    function index()
    {
        $sql    = "SELECT kode_penggajian, nama FROM tbl_gaji AS tbl_karyawan WHERE NIP AND tanggal_penerimaan";
        $data['gaji']=$this->db->query($sql);
	      $this->template->load('template', 'gaji/view');
    }
    
    function add()
    {
      if (isset($_POST['submit'])) {
        $this->model_gaji->save();
        
        redirect('gaji');
      } else {
        $this->template->load('template', 'gaji/add');
      }
    }  

   

    function edit()
    {
      if (isset($_POST['submit'])) {
        $this->model_gaji->update();
        redirect('gaji');
      } else {
        $kode_penggajian     = $this->uri->segment(3);
        $data['gaji']  = $this->db->get_where('tbl_gaji', array('id_gaji' => $kode_penggajian))->row_array();
        $this->template->load('template', 'gaji/edit', $data);
      }
    }

    function delete()
    {
      $kode_penggajian = $this->uri->segment(3);
      if (!empty($kode_penggajian)) {
        $this->db->where('kode_penggajian', $kode_penggajian);
        $this->db->delete('tbl_gaji');
      }
      redirect('gaji');
    }

}