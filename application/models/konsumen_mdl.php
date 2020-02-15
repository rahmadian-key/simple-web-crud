<?php

	class konsumen_mdl extends CI_model
	{

		public function getAllkonsumen()
		{
			$query = $this->db->get('data_konsumen');
			return $query->result_array();
		}

		public function tambahDataKaryawan()
		{

			$data = [
        'nama' => $this->input->post('nama', true),
        'no_hp' => $this->input->post('no_hp', true),
        'saldo' => $this->input->post('saldo', true)		
    	];

    	$this->db->insert('data_konsumen', $data);
		}
	}


?>