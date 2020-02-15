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
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('templates/header', $data);
				$this->load->view('konsumen/tambah', $data);
				$this->load->view('templates/footer');
			}
			else
			{
				$this->konsumen_mdl->tambahDataKonsumen();
				$this->session->set_flashdata('flash','ditambahkan');
				redirect('konsumen');
			}
		}
		public function hapus($no)
		{
			$this->konsumen_mdl->hapusDataKonsumen($no);
			$this->session->set_flashdata('flash','dihapus');
			redirect('konsumen');
		}
		public function edit($no)
		{
			$data['judul'] = 'Form Ubah Data Konsumen';
			$data['konsumen'] = $this->konsumen_mdl->getKonsumenbyNo($no);

			$this->form_validation->set_rules('nama', 'nama', 'required');
			$this->form_validation->set_rules('no_hp', 'nomor HP', 'required|numeric|min_length[11]|max_length[13]');

			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('templates/header', $data);
				$this->load->view('konsumen/edit', $data);
				$this->load->view('templates/footer');
			}
			else
			{
				$this->konsumen_mdl->editDataKonsumen();
				$this->session->set_flashdata('flash','diubah');
				redirect('konsumen');
			}
		}
	}
?>