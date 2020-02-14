<?php

	class barang extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model("barang_mdl");
		}

		public function index()
		{
			$data['judul'] = 'Data Barang';
			$data['barang'] = $this->barang_mdl->getAllbarang();
			$this->load->view('templates/header', $data);
			$this->load->view('barang/index', $data);
			$this->load->view('templates/footer');
		}
	}
?>