<?php

  class Bonus extends CI_Controller
  {
    
    function __construct()
    {
      parent::__construct();
      //checkAksesModule();
      $this->load->library('ssp');
      $this->load->model('model_bonus');
      // $this->load->helper(array('form', 'url'));
    }

    function data()
    {

      // nama table
      $table      = 'tbl_aturan_gaji';
      // nama PK
      $primaryKey = 'id_aturan_gaji';
      // list field yang mau ditampilkan
      $columns    = array(
            //tabel db(kolom di database) => dt(nama datatable di view)
            array('db' => 'jabatan', 'dt' => 'jabatan'),
            array('db' => 'masa_kerja', 'dt' => 'masa_kerja'),
            array('db' => 'insentif', 'dt' => 'insentif'),
            array('db' => 'bonus', 'dt' => 'bonus'),
            //untuk menampilkan aksi(edit/delete dengan parameter id karyawan)
            array(
                  'db' => 'id_aturan_gaji',
                  'dt' => 'aksi',
                  'formatter' => function($d) {
                      return anchor('bonus/edit/'.$d, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-primary" data-placement="top" title="Edit"').' 
                      '.anchor('bonusn/delete/'.$d, '<i class="fa fa-times fa fa-white"></i>', 'class="btn btn-xs btn-danger" data-placement="top" title="Delete"');
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
	    $this->template->load('template', 'bonus/view');
	}

    function add()
    {
      if (isset($_POST['submit'])) {
        $this->model_bonus->save();
        redirect('bonus');
      } else {
        $this->template->load('template', 'bonus/add');
      }
    }

    function edit()
    {
      if (isset($_POST['submit'])) {
        $this->model_bonus->update();
        redirect('bonus');
      } else {
        $id_aturan_gj     = $this->uri->segment(3);
        $data['jabatan']  = $this->db->get_where('tbl_aturan_gaji', array('id_aturan_gj' => $id_aturan_gj))->row_array();
        $this->template->load('template', 'bonus/edit', $data);
      }
    }

    function delete()
    {
      $id_aturan_gj = $this->uri->segment(3);
      if (!empty($id_aturan_gj)) {
        $this->db->where('id_aturan_gj', $id_aturan_gj);
        $this->db->delete('tbl_aturan_gaji');
      }
      redirect('bonus');
    }

  }

?>