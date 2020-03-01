<?php

  class Model_gaji extends CI_Model
  {

    public $table = "tbl_gaji";

    function save()
    {
      $data = array(
        //tabel di database => name di form
        // 'NIP'                   => $this->input->post('NIP', TRUE),
        'nama'                  => $this->input->post('nama', TRUE),
        'tanggal_penerimaan'    => $this->input->post('tanggal_penerimaan', TRUE),
        'nominal'               => $this->input->post('nominal', TRUE),
      );
      $this->db->insert($this->table, $data);
    }

    function update()
    {
        $data = array(
            'NIP'                   => $this->input->post('NIP', TRUE),
            'nama'                  => $this->input->post('nama', TRUE),
            'tanggal_penerimaan'    => $this->input->post('tanggal_penerimaan', TRUE),
            'nominal'               => $this->input->post('nominal', TRUE),
      );
      $kode_penggajian = $this->input->post('kode_penggajian');
      $this->db->where('kode_penggajian', $kode_penggajian);
      $this->db->update($this->table, $data);
      }
    }
?>