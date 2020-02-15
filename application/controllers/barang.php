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
		public function tambah()
		{
			$data['judul'] = 'Form Tambah Data Barang';
			$this->form_validation->set_rules('nama', 'nama barang', 'required');
			$this->form_validation->set_rules('harga', 'harga', 'required|numeric');
			$this->form_validation->set_rules('stok', 'stok', 'required|numeric');
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('templates/header',$data);
				$this->load->view('barang/tambah');
				$this->load->view('templates/footer');
			}
			else
			{
				$this->barang_mdl->tambahDataBarang();
				redirect('barang');
			}
		}
	}
?>