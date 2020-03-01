<?php

  class Model_bonus extends CI_Model
  {

    public $table = "tbl_aturan_gaji";

    function save()
    {
      $data = array(
        //tabel di database => name di form
        'jabatan'             => $this->input->post('jabatan', TRUE),
        'masa_kerja'          => $this->input->post('masa_kerja', TRUE),
        'insentif'            => $this->input->post('insentif', TRUE),
        'bonus'               => $this->input->post('bonus', TRUE),
      );
      $this->db->insert($this->table, $data);
    }

    function update()
    {
        $data = array(
            'jabatan'             => $this->input->post('jabatan', TRUE),
            'masa_kerja'          => $this->input->post('masa_kerja', TRUE),
            'insentif'            => $this->input->post('insentif', TRUE),
            'bonus'               => $this->input->post('bonus', TRUE),
      );
      $id_aturan_gj = $this->input->post('id_aturan_gj');
      $this->db->where('id_aturan_gj', $id_aturan_gj);
      $this->db->update($this->table, $data);
      }
    }
?>