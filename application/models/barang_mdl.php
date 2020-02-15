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
				'harga' => $this->input->post('harga', true),
				'stok' => $this->input->post('stok', true)		
	    	];

    		$this->db->insert('data_barang', $data);
		}

		public function hapusDataBarang($no)
		{
			$this->db->where('no', $no);
			$this->db->delete('data_barang');
		}
	}


?>