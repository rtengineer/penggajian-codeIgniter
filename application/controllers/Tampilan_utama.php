<?php

	class Tampilan_utama extends CI_Controller
	{
		
		function index()
		{
			$quser = 'SELECT COUNT(*) AS hasil FROM tbl_user';
			$data['user'] = $this->db->query($quser)->row_array();

			$this->template->load('template', 'dashboard', $data);
		}

	}

?>