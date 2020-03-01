<?php

  class Karyawan extends CI_Controller
  {
    
    function __construct()
    {
      parent::__construct();
      //checkAksesModule();
      $this->load->library('ssp');
      $this->load->model('model_karyawan');
    }

    function data()
    {

      // nama table
      $table      = 'tbl_karyawan';
      // nama PK
      $primaryKey = 'id_karyawan';
      // list field yang mau ditampilkan
      $columns    = array(
            //tabel db(kolom di database) => dt(nama datatable di view)
            array('db' => 'NIP', 'dt' => 'NIP'),
            array('db' => 'nama', 'dt' => 'nama'),
            array(
                'db' => 'jenis_kelamin',
                'dt' => 'jenis_kelamin',
                'formatter' => function($d) {
                  //Apabila $d bernilai L maka akan menampilkan 'Pria' apabila bernilai selain P akan menampilkan 'Wanita'
                  return $d == 'L' ? 'Pria' : 'Wanita';
                }
              ),
            array('db' => 'tgl_lahir', 'dt' => 'tgl_lahir'),
            array('db' => 'telp', 'dt' => 'telp'),
            array('db' => 'email', 'dt' => 'email'),
            array('db' => 'alamat', 'dt' => 'alamat'),
            array('db' => 'masa_kerja', 'dt' => 'masa_kerja'),
            //untuk menampilkan aksi(edit/delete dengan parameter id karyawan)
            array(
                  'db' => 'id_karyawan',
                  'dt' => 'aksi',
                  'formatter' => function($d) {
                      return anchor('karyawan/edit/'.$d, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-primary" data-placement="top" title="Edit"').' 
                      '.anchor('karyawan/delete/'.$d, '<i class="fa fa-times fa fa-white"></i>', 'class="btn btn-xs btn-danger" data-placement="top" title="Delete"');
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
      if ($this->session->userdata('id_level_user') == 2) {
				$this->template->load('template', 'karyawan/view_view_karyawan');
			} else {
				$this->template->load('template', 'karyawan/view_karyawan');
		}
	}

    function add()
    {
      if (isset($_POST['submit'])) {
        $this->model_karyawan->save();
        redirect('karyawan');
      } else {
        $this->template->load('template', 'karyawan/add');
      }
    }

    function edit()
    {
      if (isset($_POST['submit'])) {
        $this->model_karyawan->update();
        redirect('karyawan');
      } else {
        $id_karyawan     = $this->uri->segment(3);
        $data['karyawan']  = $this->db->get_where('tbl_karyawan', array('id_karyawan' => $id_karyawan))->row_array();
        $this->template->load('template', 'karyawan/edit', $data);
      }
    }

    function delete()
    {
      $id_karyawan = $this->uri->segment(3);
      if (!empty($id_karyawan)) {
        $this->db->where('id_karyawan', $id_karyawan);
        $this->db->delete('tbl_karyawan');
      }
      redirect('karyawan');
    }

  }

?>