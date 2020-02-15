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
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('templates/header', $data);
				$this->load->view('barang/tambah', $data);
				$this->load->view('templates/footer');
			}
			else
			{
				$this->barang_mdl->tambahDataBarang();
				$this->session->set_flashdata('flash','berhasil ditambahkan');
				redirect('barang');
			}
		}
		public function hapus($no)
		{
			$this->barang_mdl->hapusDataBarang($no);
			$this->session->set_flashdata('flash','Dihapus');
			redirect('barang');
		}
		public function edit($no)
		{
			$data['judul'] = 'Form Ubah Data Barang';
			$data['barang'] = $this->barang_mdl->getBarangbyNo($no);

			$this->form_validation->set_rules('nama_brg', 'nama barang', 'required');

			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('templates/header', $data);
				$this->load->view('barang/edit', $data);
				$this->load->view('templates/footer');
			}
			else
			{
				$this->barang_mdl->editDataBarang();
				$this->session->set_flashdata('flash','diubah');
				redirect('barang');
			}
		}
	}
?>