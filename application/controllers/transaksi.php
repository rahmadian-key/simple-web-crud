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
			$data['judul'] = 'Data Transaksi';
			$data['transaksi'] = $this->transaksi_mdl->getAlltransaksi();
			$data['konsumen'] = $this->transaksi_mdl->getAllkonsumen();
			$data['barang'] = $this->transaksi_mdl->getAllbarang();
			$this->load->view('templates/header', $data);
			$this->load->view('transaksi/index', $data);
			$this->load->view('templates/footer');
		}
		public function tambah()
		{
			$data['konsumen'] = $this->transaksi_mdl->getAllKonsumen();
			$data['barang'] = $this->transaksi_mdl->getAllBarang();
			$data['judul'] = 'Form Tambah Data Transaksi';
			$this->form_validation->set_rules('nama', 'nama', 'required');
			$this->form_validation->set_rules('nama_brg', 'nama barang', 'required');
			$this->form_validation->set_rules('tgl_ambil', 'tanggal ambil', 'required');
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('templates/header', $data);
				$this->load->view('transaksi/tambah', $data);
				$this->load->view('templates/footer');
			}
			else
			{
				
				$this->transaksi_mdl->tambahDatatransaksi();
				$this->session->set_flashdata('flash','ditambahkan');
				redirect('transaksi');
			}
		}
		public function hapus($no)
		{
			$this->transaksi_mdl->hapusDatatransaksi($no);
			$this->session->set_flashdata('flash','dihapus');
			redirect('transaksi');
		}
		public function edit($no)
		{
			$data['judul'] = 'Form Ubah Data Transaksi';
			$data['transaksi'] = $this->transaksi_mdl->gettransaksibyNo($no);
			$data['konsumen'] = $this->transaksi_mdl->getAllkonsumen();
			$data['barang'] = $this->transaksi_mdl->getAllbarang();

			$this->form_validation->set_rules('nama', 'nama', 'required');
			$this->form_validation->set_rules('nama_brg', 'nama barang', 'required');
			$this->form_validation->set_rules('tgl_ambil', 'tanggal ambil', 'required');

			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('templates/header', $data);
				$this->load->view('transaksi/edit', $data);
				$this->load->view('templates/footer');
			}
			else
			{
				$this->transaksi_mdl->editDatatransaksi();
				$this->session->set_flashdata('flash','diubah');
				redirect('transaksi');
			}
		}
	}
?>