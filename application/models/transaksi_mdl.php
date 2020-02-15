<?php

	class transaksi_mdl extends CI_model
	{

		public function getAlltransaksi()
		{
			$query = $this->db->get('data_transaksi');
			return $query->result_array();
		}

		public function getAllkonsumen()
		{
			$query = $this->db->get('data_konsumen');
			return $query->result_array();
		}

		public function getAllbarang()
		{
			$query = $this->db->get('data_barang');
			return $query->result_array();
		}

		public function tambahDatatransaksi()
		{

		$data = [
	        'konsumen' => $this->input->post('nama', true),
	        'nama_brg' => $this->input->post('nama_brg', true),
	        'tgl_ambil' => $this->input->post('tgl_beli')		
    	];
    	$this->db->insert('data_transaksi', $data);
		}

	}


?>