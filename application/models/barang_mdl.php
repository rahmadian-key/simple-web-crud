<?php

	class barang_mdl extends CI_model
	{

		public function getAllbarang()
		{
			$query = $this->db->get('data_barang');
			return $query->result_array();
		}

		public function tambahDataBarang()
		{

			$data = [
				'nama_brg' => $this->input->post('nama', true),	
	    	];

    		$this->db->insert('data_barang', $data);
		}

		public function hapusDataBarang($no)
		{
			$this->db->where('no', $no);
			$this->db->delete('data_barang');
		}

		public function getBarangbyNo($no)
		{
			return $this->db->get_where('data_barang',['no' => $no])->row_array();
		}

		public function editDataBarang()
		{

		$data = [
	        'nama_brg' => $this->input->post('nama_brg', true),
    	];
    	$this->db->where('no', $this->input->post('no'));
    	$this->db->update('data_barang', $data);
		}
	}


?>