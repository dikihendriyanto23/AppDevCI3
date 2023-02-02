<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
	}

	function index()
	{
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllData();
		$param = array(
			'header' => 'Tampil Data Mahasiswa',
		);

		$this->load->view('templates/header', $param);
		$this->load->view('layouts/Mahasiswa/index', $data);
	}

	function add_mhs()
	{
		$data = array(
			$nama => $this->input->post('nama'),
			$npm => $this->input->post('npm'),
			$alamat => $this->input->post('alamat'),
		);

		$this->Mahasiswa_model->addData($data);
		redirect('mahasiswa/index');
	}
}
