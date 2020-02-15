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
		public function tambah()
		{
			$data['judul'] = 'Form Tambah Data Konsumen';
			$this->form_validation->set_rules('nama', 'nama', 'required');
			$this->form_validation->set_rules('no_hp', 'nomor HP', 'required|numeric|min_length[11]|max_length[13]');
			$this->form_validation->set_rules('saldo', 'saldo', 'required|numeric');
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('templates/header',$data);
				$this->load->view('konsumen/tambah');
				$this->load->view('templates/footer');
			}
			else
			{
				$this->konsumen_mdl->tambahDataKaryawan();
				redirect('konsumen');
			}
		}
	}
?>