<?php

	class transaksi extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model("transaksi_mdl");
		}

		public function index()
		{
			$data['judul'] = 'Data Konsumen';
			$data['transaksi'] = $this->transaksi_mdl->getAlltransaksi();
			$this->load->view('templates/header', $data);
			$this->load->view('transaksi/index', $data);
			$this->load->view('templates/footer');
		}
	}
?>