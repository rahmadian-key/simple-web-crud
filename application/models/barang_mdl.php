<?php

	class barang_mdl extends CI_model
	{

		public function getAllbarang()
		{
			$query = $this->db->get('data_barang');
			return $query->result_array();
		}
	}


?>