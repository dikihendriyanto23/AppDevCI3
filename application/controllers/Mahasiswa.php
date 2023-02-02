<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
	}

	public function index()
	{
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllData();
		$param = array(
			'header' => 'Tampil Data Mahasiswa',
		);

		$this->load->view('templates/header', $param);
		$this->load->view('layouts/Mahasiswa/index', $data);
	}
}
