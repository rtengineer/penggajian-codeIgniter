<?php

  class Jabatan extends CI_Controller
  {
    
    function __construct()
    {
      parent::__construct();
      //checkAksesModule();
      $this->load->library('ssp');
      $this->load->model('model_jabatan');
    }

    function data()
    {

      // nama table
      $table      = 'tbl_jabatan';
      // nama PK
      $primaryKey = 'id_jabatan';
      // list field yang mau ditampilkan
      $columns    = array(
            //tabel db(kolom di database) => dt(nama datatable di view)
            array('db' => 'kode', 'dt' => 'kode'),
            array('db' => 'jabatan', 'dt' => 'jabatan'),
            array('db' => 'standar_gaji', 'dt' => 'standar_gaji'),
            array('db' => 'keterangan', 'dt' => 'keterangan'),
            //untuk menampilkan aksi(edit/delete dengan parameter id karyawan)
            array(
                  'db' => 'id_jabatan',
                  'dt' => 'aksi',
                  'formatter' => function($d) {
                      return anchor('jabatan/edit/'.$d, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-primary" data-placement="top" title="Edit"').' 
                      '.anchor('jabatan/delete/'.$d, '<i class="fa fa-times fa fa-white"></i>', 'class="btn btn-xs btn-danger" data-placement="top" title="Delete"');
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
      if ($this->session->userdata('id_level_user') == 3) {
				$this->template->load('template', 'jabatan/view_jabatan');
			} else {
				$this->template->load('template', 'jabatan/view');
		}
	}

    function add()
    {
      if (isset($_POST['submit'])) {
        $this->model_karyawan->save();
        redirect('jabatan');
      } else {
        $this->template->load('template', 'jabatan/add');
      }
    }

    function edit()
    {
      if (isset($_POST['submit'])) {
        $this->model_jabatan->update();
        redirect('jabatan');
      } else {
        $id_jabatan     = $this->uri->segment(3);
        $data['jabatan']  = $this->db->get_where('tbl_jabatan', array('id_jabatan' => $id_jabatan))->row_array();
        $this->template->load('template', 'jabatan/edit', $data);
      }
    }

    function delete()
    {
      $id_jabatan = $this->uri->segment(3);
      if (!empty($id_jabatan)) {
        $this->db->where('id_jabatan', $id_jabatan);
        $this->db->delete('tbl_jabatan');
      }
      redirect('jabatan');
    }

  }

?>