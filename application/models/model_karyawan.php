<?php

  class Model_karyawan extends CI_Model
  {

    public $table = "tbl_karyawan";

    function save()
    {
      $data = array(
        //tabel di database => name di form
        'NIP'             => $this->input->post('NIP', TRUE),
        'nama'            => $this->input->post('nama', TRUE),
        'jenis_kelamin'   => $this->input->post('jenis_kelamin', TRUE),
        'tgl_lahir'       => $this->input->post('tgl_lahir', TRUE),
        'telp'            => $this->input->post('telp', TRUE),
        'email'           => $this->input->post('email', TRUE),
        'alamat'          => $this->input->post('alamat', TRUE),
        'masa_kerja'      => $this->input->post('masa_kerja', TRUE),
      );
      $this->db->insert($this->table, $data);
    }

    function update()
    {
        $data = array(
        'NIP'             => $this->input->post('NIP', TRUE),
        'nama'            => $this->input->post('nama', TRUE),
        'jenis_kelamin'   => $this->input->post('jenis_kelamin', TRUE),
        'tgl_lahir'       => $this->input->post('tgl_lahir', TRUE),
        'telp'            => $this->input->post('telp', TRUE),
        'email'           => $this->input->post('email', TRUE),
        'alamat'          => $this->input->post('alamat', TRUE),
        'masa_kerja'      => $this->input->post('masa_kerja', TRUE),
      );
      $id_karyawan = $this->input->post('id_karyawan');
      $this->db->where('id_karyawan', $id_karyawan);
      $this->db->update($this->table, $data);
    }

    // function karyawan()
    // {
    //   $data = array(
    //     'nama'            => $this->input->get('nama', TRUE),
    //   );
    //     return $data->result_array($this->table, $data);
    //   // $this->db->order_by('nama','ASC');
    //   // $tbl_karyawan= $this->db->get('tbl_karyawan');
    
      
      
    //   }

    // function login($username, $password)
    // {
    //   $this->db->where('username', $username);
    //   $this->db->where('password', md5($password));
    //   $user = $this->db->get('tbl_karyawan')->row_array();
    //   return $user;
    // }

 }

?>