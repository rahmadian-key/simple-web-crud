<?php

	class notfound extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$data["judul"] = "404 Not Found";
			$this->load->view('templates/header', $data);
			$this->load->view('notfound/index', $data);
			$this->load->view('templates/footer');
		}
	}
?>