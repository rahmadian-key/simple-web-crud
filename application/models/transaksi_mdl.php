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
	        'tgl_ambil' => $this->input->post('tgl_ambil')		
    	];
    	$this->db->insert('data_transaksi', $data);
		}

		public function getKonsumenbyNo($no)
		{
			return $this->db->get_where('data_konsumen',['no' => $no])->row_array();
		}

		public function getBarangbyNo($no)
		{
			return $this->db->get_where('data_barang',['no' => $no])->row_array();
		}

		public function gettransaksibyNo($no)
		{
			return $this->db->get_where('data_transaksi',['no' => $no])->row_array();
		}

		public function hapusDatatransaksi($no)
		{
			$this->db->where('no', $no);
			$this->db->delete('data_transaksi');
		}
		public function editdatatransaksi()
		{
		$data = [
			'nama' => $this->input->post('nama', true),
			'nama_brg' => $this->input->post('nama_brg', true),	
			'tgl_ambil' => $this->input->post('tgl_ambil')
    	];
			$this->db->where('no', $this->input->post('no'));
			$this->db->update('data_transaksi', $data);
		}
	}


?>