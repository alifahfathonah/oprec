<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('models_admin');
	}

	public function index()
	{
		if ($this->session->userdata('login')==='1'){
			redirect('admin/dashboard');
		}
		$data['title'] = 'Admin Pendaftaran Calon Asisten Laboratorium Teknik Informatika';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/login');
		$this->load->view('include/footer');
		if (isset( $_POST['submit'])){
			$this->_login();
		}

	}

	private function _login(){
		$username = $this->input->post('uname');
		$password = $this->input->post('pwd');
		
		$user = $this->db->get_where('tbl_akun', ['username' => $username])->row_array();
		
		if ($user){
			if ($password=== $user['password']){
				$this->session->set_userdata('login', '1');
				$this->session->set_userdata('region', $username);
				redirect('admin/dashboard');
			}
		}else{
			$this->session->set_flashdata('message', 'gagal');
			redirect('admin');
		}
	}

	public function logout(){
		if ($this->session->userdata('login')==='1'){
			$this->session->unset_userdata('login');
			$this->session->unset_userdata('region');
			redirect('admin');	
		}else{
			redirect('admin');
		}
	}

	public function dashboard()
	{
		if (is_null($this->uri->segment(4))) {
			$this->session->unset_userdata('keyword-calon-asisten');
		}
		//Load library pagination
		$this->load->library('pagination');

		//ambil data keyword
		$keyword = $this->input->post('keyword-calon-asisten');
		if (!is_null($keyword)) { //keyword ada
			$data['keyword-calon-asisten'] = $this->input->post('keyword-calon-asisten');
			$this->session->set_userdata('keyword-calon-asisten', $data['keyword-calon-asisten']);
		}else{ //keyword-calon-asisten gaada
			$data['keyword-calon-asisten'] = $this->session->userdata('keyword-calon-asisten');
		}

		//config pagination
		$config['base_url'] = base_url('admin/dashboard/index');
		$this->db->like('nama', $data['keyword-calon-asisten']);
		$this->db->or_like('npm', $data['keyword-calon-asisten']);
		$this->db->or_like('token', $data['keyword-calon-asisten']);
		$this->db->or_like('kelas', $data['keyword-calon-asisten']);
		$this->db->from('tbl_biodata');
		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = 10;

		//initialize pagination
		$this->pagination->initialize($config);
		$data['start'] = $this->uri->segment(4);

		$data['title'] = 'Biodata Calon Asisten';
		$data['calas'] = $this->models_admin->getAllCalas($config['per_page'], $data['start'], $data['keyword-calon-asisten']);
		$this->load->view('admin/dashboard/header', $data);
		if ($this->session->userdata('region') == 'labti_xm') {
			$this->load->view('admin/dashboard/sidebar_xm');	
		} else{
			$this->load->view('admin/dashboard/sidebar');
		}
		$this->load->view('admin/dashboard/biodata', $data);
		$this->load->view('admin/dashboard/footer');
	}

	public function getDetailCalas(){
		echo json_encode($this->models_admin->getDetailCalas($this->input->post('token_calas')));
	}

	public function downloadBerkas($nama_file){
		$this->load->helper('download');
		force_download($_SERVER['DOCUMENT_ROOT'].'/oprec/berkas/'.$nama_file, NULL);
	}

	public function regionkd()
	{
		echo json_encode($this->models_admin->id_peserta('KD'));
	}

	public function regionxm()
	{
		echo json_encode($this->models_admin->id_peserta('XM'));
	}

	public function regionck()
	{
		echo json_encode($this->models_admin->id_peserta('CK'));
	}

	public function regionkw()
	{
		echo json_encode($this->models_admin->id_peserta('KW'));
	}
	
	public function nilai(){
		if (is_null($this->uri->segment(4))) {
			$this->session->unset_userdata('keyword-nilai-calon-asisten');
		}

		//Load library pagination
		$this->load->library('pagination');

		//ambil data keyword
		$keyword = $this->input->post('keyword-nilai-calon-asisten');
		if (!is_null($keyword)) { //keyword ada
			$data['keyword-nilai-calon-asisten'] = $this->input->post('keyword-nilai-calon-asisten');
			$this->session->set_userdata('keyword-nilai-calon-asisten', $data['keyword-nilai-calon-asisten']);
		}else{ //keyword-nilai-calon-asisten gaada
			$data['keyword-nilai-calon-asisten'] = $this->session->userdata('keyword-nilai-calon-asisten');
		}

		//config pagination
		$config['base_url'] = base_url('admin/nilai/index');
		$this->db->like('tbl_biodata.nama', $data['keyword-nilai-calon-asisten']);
		$this->db->or_like('tbl_biodata.npm', $data['keyword-nilai-calon-asisten']);
		$this->db->or_like('tbl_nilai.token', $data['keyword-nilai-calon-asisten']);
		$this->db->or_like('tbl_biodata.kelas', $data['keyword-nilai-calon-asisten']);
		$this->db->from('tbl_nilai');
		$this->db->join('tbl_biodata','tbl_biodata.token = tbl_nilai.token');
		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = 10;

		//initialize pagination
		$this->pagination->initialize($config);
		$data['start'] = $this->uri->segment(4);

		$data['title'] = 'Nilai Calon Asisten';
		$data['nilai_calas'] = $this->models_admin->getNilai($config['per_page'], $data['start'], $data['keyword-nilai-calon-asisten']);
		$this->load->view('admin/dashboard/header', $data);
		$this->load->view('admin/dashboard/sidebar');
		$this->load->view('admin/dashboard/nilai', $data);
		$this->load->view('admin/dashboard/footer');
	}

	// public function wawancara(){
	// 	$data['title'] = 'Nilai Calon Asisten';
	// 	$this->load->view('admin/dashboard/header', $data);
	// 	$this->load->view('admin/dashboard/sidebar');
	// 	$this->load->view('admin/dashboard/wawancara', $data);
	// 	$this->load->view('admin/dashboard/footer');
	// }

	public function getNilaiByToken(){
		echo json_encode($this->models_admin->getNilaiByToken($this->input->post('nilai_calas')));
	}

	public function updateNilai(){
		$this->models_admin->updateNilai();
		redirect('admin/nilai','refresh');
	}

	public function report($token)
	{
		if ($this->session->userdata('region') =='labti_xm'){
			redirect('admin');
		}elseif ($this->session->userdata('login') !=='1'){
			redirect('admin/dashboard');
		}
		$data['report'] = $this->models_admin->report($token);
		$this->load->library('Pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "Report.pdf";
		$this->pdf->load_view('admin/report/report_card', $data);
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */