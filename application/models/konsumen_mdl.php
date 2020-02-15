<?php

	class konsumen_mdl extends CI_model
	{

		public function getAllkonsumen()
		{
			$query = $this->db->get('data_konsumen');
			return $query->result_array();
		}

		public function tambahDataKonsumen()
		{

		$data = [
	        'nama' => $this->input->post('nama', true),
	        'no_hp' => $this->input->post('no_hp', true),		
    	];

    	$this->db->insert('data_konsumen', $data);
		}

		public function hapusDataKonsumen($no)
		{
			$this->db->where('no', $no);
			$this->db->delete('data_konsumen');
		}

		public function getKonsumenbyNo($no)
		{
			return $this->db->get_where('data_konsumen',['no' => $no])->row_array();
		}

		public function editDataKonsumen()
		{

		$data = [
	        'nama' => $this->input->post('nama', true),
	        'no_hp' => $this->input->post('no_hp', true),	
    	];
    	$this->db->where('no', $this->input->post('no'));
    	$this->db->update('data_konsumen', $data);
		}
	}


?>