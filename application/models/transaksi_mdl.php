<?php

	class transaksi_mdl extends CI_model
	{

		public function getAlltransaksi()
		{
			$query = $this->db->get('data_transaksi');
			return $query->result_array();
		}
	}


?>