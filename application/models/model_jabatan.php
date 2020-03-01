<?php

  class Model_jabatan extends CI_Model
  {

    public $table = "tbl_jabatan";

    function save()
    {
      $data = array(
        //tabel di database => name di form
        'kode'               => $this->input->post('kode', TRUE),
        'jabatan'            => $this->input->post('jabatan', TRUE),
        'standar_gaji'       => $this->input->post('standar_gaji', TRUE),
        'keterangan'         => $this->input->post('keterangan', TRUE),
      );
      $this->db->insert($this->table, $data);
    }

    function update()
    {
        $data = array(
            'jabatan'            => $this->input->post('jabatan', TRUE),
            'standar_gaji'       => $this->input->post('standar_gaji', TRUE),
            'keterangan'         => $this->input->post('keterangan', TRUE),
      );
      $id_jabatan = $this->input->post('id_jabatan');
      $this->db->where('id_jabatan', $id_jabatan);
      $this->db->update($this->table, $data);
      }
    }
?>