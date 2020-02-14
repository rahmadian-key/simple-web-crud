<?php

	class konsumen_mdl extends CI_model
	{

		public function getAllkonsumen()
		{
			$query = $this->db->get('data_konsumen');
			return $query->result_array();
		}
	}


?>