<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		if (!empty($this->session->userdata("nip"))){
			if($this->session->userdata("admin") == "ya"){
				redirect("admin/dashboard_admin");
			}
			else{
				redirect("admin/dashboard_user");
			}
		}
		$data['title'] = 'Indikator Nasional Mutu';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/login');
		$this->load->view('include/footer');
		if (isset( $_POST['submit'])){
			$this->_login();
		}

	}

	private function _login(){
		if(empty($this->session->userdata("nip")))
		{
			 $datas = $this->input->post();
			   if(!empty($datas))
			   {
			   $this->load->model('login_model');
			  //var_dump($datas);
					$data = $this->login_model->login($datas['uname'],$datas['pwd']);
					
						 //var_dump($data);
						 if(!empty($data))
					{
				
						$start=time();
						$data_session = array(
							'nip' =>$data[0]['nip'],
							//'nama' => $data[0]['nama_lengkap'],
							'user' => $data[0]['username'],
							'kdrs' => $data[0]['kode_rs'],
							'jenis' => $data[0]['jenis'],
							'admin' => $data[0]['admin']
						);
						$this->session->set_userdata($data_session);
						//redirect("admin/dashboard");
						if($this->session->userdata("admin") == "ya"){
							redirect("admin/dashboard_admin");
						}
						else{
							redirect("admin/dashboard_user");
						}
						}
			
			}else{
				$this->session->set_flashdata('message', 'gagal');
				
			}
    	}
	}
	
	
	public function logout(){
		if (!empty($this->session->userdata("nip"))){
			$this->session->unset_userdata("nip");
			redirect('admin');	
		}else{
			redirect('admin');
		}
	}

	public function dashboard_user()
	{
		//Load library pagination
		$this->load->library('pagination');

		//config pagination
		$config['base_url'] = base_url('admin/dashboard_user/index');
		//initialize pagination
		$this->pagination->initialize($config);
		$this->load->view('admin/dashboard_user/header');
		$this->load->view('admin/dashboard_user/sidebar');
		$this->load->view('admin/dashboard_user/biodata');
		$this->load->view('admin/dashboard_user/footer');
	}
	public function dashboard_admin()
	{
		//Load library pagination
		$this->load->library('pagination');

		//config pagination
		$config['base_url'] = base_url('admin/dashboard_admin/index');
		//initialize pagination
		$this->pagination->initialize($config);
		$this->load->view('admin/dashboard_admin/header');
		$this->load->view('admin/dashboard_admin/sidebar');
		$this->load->view('admin/dashboard_admin/rekapbulanan');
		$this->load->view('admin/dashboard_admin/footer');
	}
	public function nilai()
	{
		//Load library pagination
		$this->load->library('pagination');

		//config pagination
		$config['base_url'] = base_url('admin/dashboard_user/index');
		//initialize pagination
		$this->pagination->initialize($config);
		$this->load->view('admin/dashboard_user/header');
		$this->load->view('admin/dashboard_user/sidebar');
		$this->load->view('admin/dashboard_user/nilai');
		$this->load->view('admin/dashboard_user/footer');
	}
	public function rekap_tahunan()
	{
		//Load library pagination
		$this->load->library('pagination');

		//config pagination
		$config['base_url'] = base_url('admin/dashboard_admin/index');
		//initialize pagination
		$this->pagination->initialize($config);
		$this->load->view('admin/dashboard_admin/header');
		$this->load->view('admin/dashboard_admin/sidebar');
		$this->load->view('admin/dashboard_admin/nilai');
		$this->load->view('admin/dashboard_admin/footer');
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */