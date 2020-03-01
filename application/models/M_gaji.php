<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_gaji extends CI_Model {

	public function all()
	{
		return $this->db->select('tg.*, tk.nama, tk.NIP')
                        ->from('tbl_gaji tg')
                        ->join('tbl_karyawan tk','tk.id_karyawan=tg.id')
                        ->join('tbl_jabatan tj','tj.id_jabatan=tk.id_jabatan')
                        ->order_by('tg.tanggal_penerimaan','desc')
                        ->get()
                        ->result()
		;
	}

}