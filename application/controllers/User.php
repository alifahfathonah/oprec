<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('date');
		$this->load->helper('string');
		$this->load->model('models_oprec');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Pendaftaran Asisten - Labti Universitas Gunadarma';
		$data['region'] = $this->models_oprec->get_region();
		$data['jk'] = $this->models_oprec->get_jk();
		$this->load->view('include/header', $data);
		$this->load->view('index');
		$this->load->view('include/footer');	
	}

	public function add_calas()
	{
		$this->models_oprec->add_calas();
		$this->models_oprec->save_nilai();

		$upload_foto = $this->models_oprec->upload_foto();
		$this->models_oprec->save_foto($upload_foto);

		$upload = $this->models_oprec->upload();
		$this->models_oprec->save($upload);

		$token = $this->input->post('token', true);
		redirect('user/kartu/'.$token);
	}

	
	public function kartu($token)
	{
		$data['peserta'] = $this->models_oprec->detail_peserta($token);
		$this->load->library('Pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "Kartu_Peserta.pdf";
		$this->pdf->load_view('user/kartu_peserta', $data);
	}
}