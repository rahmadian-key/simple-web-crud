<?php

	class konsumen extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model("konsumen_mdl");
		}

		public function index()
		{
			$data['judul'] = 'Data Konsumen';
			$data['konsumen'] = $this->konsumen_mdl->getAllkonsumen();
			$this->load->view('templates/header', $data);
			$this->load->view('konsumen/index', $data);
			$this->load->view('templates/footer');
		}
	}
?>